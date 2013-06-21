<?php

// The content type definitions below 
// were exported via the bundly_copy module.
// In your Drupal site, see 
// Structure -> Content Types -> Export

$nln_choice_type_definition = array(
  'bundles' => array(
    'non_linear_narrative_choice' => (object) array(
      'type' => 'non_linear_narrative_choice',
      'name' => 'Non-linear narrative choice',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'This content type continues a <em>Non-linear narrative</em>.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'non_linear_narrative_choice',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
  ),
  'fields' => array(
    'body' => array(
      'entity_types' => array(
        0 => 'node',
      ),
      'translatable' => '1',
      'settings' => array(),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'body',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'summary' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'page',
          1 => 'article',
          2 => 'non_linear_narrative_choice',
          3 => 'non_linear_narrative_start',
        ),
      ),
    ),
    'field_links' => array(
      'translatable' => '1',
      'entity_types' => array(),
      'settings' => array(
        'referenceable_types' => array(
          'non_linear_narrative_choice' => 'non_linear_narrative_choice',
          'article' => 0,
          'page' => 0,
          'non_linear_narrative_start' => 0,
        ),
        'view' => array(
          'view_name' => '',
          'display_name' => '',
          'args' => array(),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_links' => array(
                'nid' => 'field_links_nid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_links' => array(
                'nid' => 'field_links_nid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'nid' => array(
          'table' => 'node',
          'columns' => array(
            'nid' => 'nid',
          ),
        ),
      ),
      'indexes' => array(
        'nid' => array(
          0 => 'nid',
        ),
      ),
      'field_name' => 'field_links',
      'type' => 'node_reference',
      'module' => 'node_reference',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '-1',
      'deleted' => '0',
      'columns' => array(
        'nid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'non_linear_narrative_choice',
          1 => 'non_linear_narrative_start',
        ),
      ),
    ),
    'field_media' => array(
      'translatable' => '1',
      'entity_types' => array(),
      'settings' => array(
        'display_field' => 0,
        'display_default' => 0,
        'uri_scheme' => 'public',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_media' => array(
                'fid' => 'field_media_fid',
                'display' => 'field_media_display',
                'description' => 'field_media_description',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_media' => array(
                'fid' => 'field_media_fid',
                'display' => 'field_media_display',
                'description' => 'field_media_description',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'fid' => array(
          'table' => 'file_managed',
          'columns' => array(
            'fid' => 'fid',
          ),
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'field_name' => 'field_media',
      'type' => 'file',
      'module' => 'file',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'fid' => array(
          'description' => 'The {file_managed}.fid being referenced in this field.',
          'type' => 'int',
          'not null' => FALSE,
          'unsigned' => TRUE,
        ),
        'display' => array(
          'description' => 'Flag to control whether this file should be displayed when viewing content.',
          'type' => 'int',
          'size' => 'tiny',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 1,
        ),
        'description' => array(
          'description' => 'A description of the file.',
          'type' => 'text',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'non_linear_narrative_choice',
          1 => 'non_linear_narrative_start',
        ),
      ),
    ),
  ),
  'instances' => array(
    'body' => array(
      0 => array(
        'label' => 'Body',
        'widget_type' => 'text_textarea_with_summary',
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '0',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'weight' => '0',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
          ),
        ),
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '1',
          'module' => 'text',
        ),
        'required' => FALSE,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_choice',
        'deleted' => '0',
      ),
    ),
    'field_links' => array(
      0 => array(
        'label' => 'Narrative links',
        'widget' => array(
          'weight' => '4',
          'type' => 'node_reference_autocomplete',
          'module' => 'node_reference',
          'active' => 1,
          'settings' => array(
            'autocomplete_match' => 'contains',
            'size' => '60',
            'autocomplete_path' => 'node_reference/autocomplete',
          ),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'node_reference_default',
            'weight' => '2',
            'settings' => array(),
            'module' => 'node_reference',
          ),
          'teaser' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '0',
            'settings' => array(),
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_links',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_choice',
        'deleted' => '0',
      ),
    ),
    'field_media' => array(
      0 => array(
        'label' => 'Multimedia',
        'widget' => array(
          'weight' => '3',
          'type' => 'file_generic',
          'module' => 'file',
          'active' => 1,
          'settings' => array(
            'progress_indicator' => 'throbber',
            'insert' => 0,
            'insert_styles' => array(
              0 => 'auto',
            ),
            'insert_default' => array(
              0 => 'auto',
            ),
            'insert_class' => '',
            'insert_width' => '',
          ),
        ),
        'settings' => array(
          'file_directory' => '',
          'file_extensions' => 'flv mp3',
          'max_filesize' => '20 MB',
          'description_field' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'file_default',
            'weight' => '1',
            'settings' => array(),
            'module' => 'file',
          ),
          'teaser' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '0',
            'settings' => array(),
          ),
        ),
        'required' => 0,
        'description' => '',
        'field_name' => 'field_media',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_choice',
        'deleted' => '0',
      ),
    ),
  ),
);


$nln_start_type_definition = array(
  'bundles' => array(
    'non_linear_narrative_start' => (object) array(
      'type' => 'non_linear_narrative_start',
      'name' => 'Non-linear narrative start',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'This content type starts a <em>non-linear narrative</em>, a \'choose-your-own-adventure\'-type story.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'non_linear_narrative_start',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
  ),
  'fields' => array(
    'body' => array(
      'entity_types' => array(
        0 => 'node',
      ),
      'translatable' => '1',
      'settings' => array(),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'body',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'summary' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'page',
          1 => 'article',
          2 => 'non_linear_narrative_choice',
          3 => 'non_linear_narrative_start',
        ),
      ),
    ),
    'field_allotted_time' => array(
      'translatable' => '1',
      'entity_types' => array(),
      'settings' => array(),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_allotted_time' => array(
                'value' => 'field_allotted_time_value',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_allotted_time' => array(
                'value' => 'field_allotted_time_value',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(),
      'indexes' => array(),
      'field_name' => 'field_allotted_time',
      'type' => 'number_integer',
      'module' => 'number',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'int',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'non_linear_narrative_start',
        ),
      ),
    ),
    'field_links' => array(
      'translatable' => '1',
      'entity_types' => array(),
      'settings' => array(
        'referenceable_types' => array(
          'non_linear_narrative_choice' => 'non_linear_narrative_choice',
          'article' => 0,
          'page' => 0,
          'non_linear_narrative_start' => 0,
        ),
        'view' => array(
          'view_name' => '',
          'display_name' => '',
          'args' => array(),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_links' => array(
                'nid' => 'field_links_nid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_links' => array(
                'nid' => 'field_links_nid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'nid' => array(
          'table' => 'node',
          'columns' => array(
            'nid' => 'nid',
          ),
        ),
      ),
      'indexes' => array(
        'nid' => array(
          0 => 'nid',
        ),
      ),
      'field_name' => 'field_links',
      'type' => 'node_reference',
      'module' => 'node_reference',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '-1',
      'deleted' => '0',
      'columns' => array(
        'nid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'non_linear_narrative_choice',
          1 => 'non_linear_narrative_start',
        ),
      ),
    ),
    'field_media' => array(
      'translatable' => '1',
      'entity_types' => array(),
      'settings' => array(
        'display_field' => 0,
        'display_default' => 0,
        'uri_scheme' => 'public',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_media' => array(
                'fid' => 'field_media_fid',
                'display' => 'field_media_display',
                'description' => 'field_media_description',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_media' => array(
                'fid' => 'field_media_fid',
                'display' => 'field_media_display',
                'description' => 'field_media_description',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'fid' => array(
          'table' => 'file_managed',
          'columns' => array(
            'fid' => 'fid',
          ),
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'field_name' => 'field_media',
      'type' => 'file',
      'module' => 'file',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'fid' => array(
          'description' => 'The {file_managed}.fid being referenced in this field.',
          'type' => 'int',
          'not null' => FALSE,
          'unsigned' => TRUE,
        ),
        'display' => array(
          'description' => 'Flag to control whether this file should be displayed when viewing content.',
          'type' => 'int',
          'size' => 'tiny',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 1,
        ),
        'description' => array(
          'description' => 'A description of the file.',
          'type' => 'text',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'non_linear_narrative_choice',
          1 => 'non_linear_narrative_start',
        ),
      ),
    ),
  ),
  'instances' => array(
    'body' => array(
      0 => array(
        'label' => 'Body',
        'widget_type' => 'text_textarea_with_summary',
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '0',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'weight' => '0',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
          ),
        ),
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '1',
          'module' => 'text',
        ),
        'required' => FALSE,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_start',
        'deleted' => '0',
      ),
    ),
    'field_allotted_time' => array(
      0 => array(
        'label' => 'Allotted time',
        'widget' => array(
          'weight' => '4',
          'type' => 'number',
          'module' => 'number',
          'active' => 0,
          'settings' => array(),
        ),
        'settings' => array(
          'min' => '',
          'max' => '',
          'prefix' => '',
          'suffix' => '',
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '3',
            'settings' => array(),
          ),
          'teaser' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '0',
            'settings' => array(),
          ),
        ),
        'required' => 0,
        'description' => 'Is there a time limit associated with this narrative? If so, enter it here, in <strong>seconds</strong>. Otherwise, leave the field blank.',
        'default_value' => NULL,
        'field_name' => 'field_allotted_time',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_start',
        'deleted' => '0',
      ),
    ),
    'field_links' => array(
      0 => array(
        'label' => 'Narrative links',
        'widget' => array(
          'weight' => '5',
          'type' => 'node_reference_autocomplete',
          'module' => 'node_reference',
          'active' => 1,
          'settings' => array(
            'autocomplete_match' => 'contains',
            'size' => '60',
            'autocomplete_path' => 'node_reference/autocomplete',
          ),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'node_reference_default',
            'weight' => '2',
            'settings' => array(),
            'module' => 'node_reference',
          ),
          'teaser' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '0',
            'settings' => array(),
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_links',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_start',
        'deleted' => '0',
      ),
    ),
    'field_media' => array(
      0 => array(
        'label' => 'Multimedia',
        'widget' => array(
          'weight' => '3',
          'type' => 'file_generic',
          'module' => 'file',
          'active' => 1,
          'settings' => array(
            'progress_indicator' => 'throbber',
            'insert' => 0,
            'insert_styles' => array(
              0 => 'auto',
            ),
            'insert_default' => array(
              0 => 'auto',
            ),
            'insert_class' => '',
            'insert_width' => '',
          ),
        ),
        'settings' => array(
          'file_directory' => '',
          'file_extensions' => 'flv mp3',
          'max_filesize' => '',
          'description_field' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'file_default',
            'weight' => '1',
            'settings' => array(),
            'module' => 'file',
          ),
          'teaser' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '0',
            'settings' => array(),
          ),
        ),
        'required' => 0,
        'description' => '',
        'field_name' => 'field_media',
        'entity_type' => 'node',
        'bundle' => 'non_linear_narrative_start',
        'deleted' => '0',
      ),
    ),
  ),
);

?>