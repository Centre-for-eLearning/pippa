<?php

/* Functions to create nln content types
 */

// This is nearly a carbon copy of bundle_copy_import_submit
// from the bundle_copy module. I simply couldn't get the data
// coaxed into the proper format for that function to accept.
// (It requires a string of an array assigned to a variable 
// '$data' in an array. Blah, blah, blah. I've simple copied 
// and modified it to take an array directly. 
//
function pippa_import(&$data) {

  if (isset($data) && is_array($data)) {

    $modules = module_list();
    $bc_info = bundle_copy_get_info();

    // Create bundles.
    foreach ($data['bundles'] as $key => $bundle) {
      $entity_type = '';
      if (is_object($bundle)) {
        $entity_type = $bundle->bc_entity_type;
      }
      elseif (is_array($bundle)) {
        $entity_type = $bundle['bc_entity_type'];
      }
      if (!empty($entity_type)) {
        $existing_bundles = _bundle_copy_bundle_info($entity_type);
        $bundle_save_callback = $bc_info[$entity_type]['bundle_save_callback'];
        $bundle_info = $bundle_save_callback($bundle);
        if (!isset($existing_bundles[$key])) {
          drupal_set_message(t('%bundle bundle has been created.', array('%bundle' => $bundle->name)));
        }
        else {
          drupal_set_message(t('%bundle bundle has been updated.', array('%bundle' => $bundle->name)));
        }
      }
    }

    // Create or update fields and their instances
    if (isset($data['fields'])) {
      foreach ($data['fields'] as $key => $field) {

        // Check if the field module exists.
        $module = $field['module'];
        if (!isset($modules[$module])) {
          drupal_set_message(t('%field_name field could not be created because the module %module is disabled or missing.', array('%field_name' => $key, '%module' => $module)), 'error');
          continue;
        }

        if (isset($data['instances'][$key])) {

          // Create or update field.
          $prior_field = field_read_field($field['field_name'], array('include_inactive' => TRUE));
          if (!$prior_field) {
            field_create_field($field);
            drupal_set_message(t('%field_name field has been created.', array('%field_name' => $key)));
          }
          else {
            $field['id'] = $prior_field['id'];
            field_update_field($field);
            drupal_set_message(t('%field_name field has been updated.', array('%field_name' => $key)));
          }

          // Create or update field instances.
          foreach ($data['instances'][$key] as $ikey => $instance) {

            // Make sure the needed key exists.
            if (!isset($instance['field_name'])) {
              continue;
            }

            $prior_instance = field_read_instance($instance['entity_type'], $instance['field_name'], $instance['bundle']);
            if (!$prior_instance) {
              field_create_instance($instance);
              drupal_set_message(t('%field_name instance has been created for @bundle in @entity_type.', array('%field_name' => $key, '@bundle' => $instance['bundle'], '@entity_type' => $instance['entity_type'])));
            }
            else {
              $instance['id'] = $prior_instance['id'];
              $instance['field_id'] = $prior_instance['field_id'];
              field_update_instance($instance);
              drupal_set_message(t('%field_name instance has been updated for @bundle in @entity_type.', array('%field_name' => $key, '@bundle' => $instance['bundle'], '@entity_type' => $instance['entity_type'])));
            }
          }
        }
      }
    }

    // Create / update fieldgroups.
    if (isset($data['fieldgroups'])) {
      if (module_exists('field_group')) {
        ctools_include('export');
        $existing_field_groups = field_group_info_groups();
        foreach ($data['fieldgroups'] as $identifier => $fieldgroup) {
          if (isset($existing_field_groups[$fieldgroup->entity_type][$fieldgroup->bundle][$fieldgroup->mode][$fieldgroup->group_name])) {
            $existing = $existing_field_groups[$fieldgroup->entity_type][$fieldgroup->bundle][$fieldgroup->mode][$fieldgroup->group_name];
            $fieldgroup->id = $existing->id;
            if (!isset($fieldgroup->disabled)) {
              $fieldgroup->disabled = FALSE;
            }
            ctools_export_crud_save('field_group', $fieldgroup);
            ctools_export_crud_set_status('field_group', $fieldgroup, $fieldgroup->disabled);
            drupal_set_message(t('%fieldgroup fieldgroup has been updated for @bundle in @entity_type.', array('%fieldgroup' => $fieldgroup->label, '@bundle' => $fieldgroup->bundle, '@entity_type' => $fieldgroup->entity_type)));
          }
          else {
            unset($fieldgroup->id);
            unset($fieldgroup->export_type);
            if (!isset($fieldgroup->disabled)) {
              $fieldgroup->disabled = FALSE;
            }
            ctools_export_crud_save('field_group', $fieldgroup);
            $fieldgroup->export_type = 1;
            ctools_export_crud_set_status('field_group', $fieldgroup, $fieldgroup->disabled);
            drupal_set_message(t('%fieldgroup fieldgroup has been saved for @bundle in @entity_type.', array('%fieldgroup' => $fieldgroup->label, '@bundle' => $fieldgroup->bundle, '@entity_type' => $fieldgroup->entity_type)));
          }
        }
      }
      else {
        drupal_set_message(t('The fieldgroups could not be saved because the <em>Field group</em> module is disabled or missing.'), 'error');
      }
    }

    // Clear caches.
    field_info_cache_clear();
    if (module_exists('field_group')) {
      cache_clear_all('field_groups', 'cache_field');
    }
  }
  else {
    drupal_set_message(t('The pasted text did not contain any valid export data.'), 'error');
  }
}



// Import the type definitions.
include 'nln_types.php';

// Get the installed content types.
$types = node_type_get_types();

// If the content types don't exist, import them.

if(!isset($types['non_linear_narrative_choice'])){
  pippa_import($nln_choice_type_definition);
}

if(!isset($types['non_linear_narrative_start'])){
  pippa_import($nln_start_type_definition);
}


?>
