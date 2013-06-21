(function($){
    $(document).ready(function(){
	    //Toggle transcript (body text)...
	    //but only if there's media.
	    var media_exists = $('#content div.field-name-field-media').find('span.file').length > 0;
	    if(media_exists){
		$body = $('#content div.field-name-body').hide();
		$transcript_button = $('<a href="#">Transcript</a>').insertBefore($body).click(function(){$body.slideToggle();});
	    }

	    //Remove link on the title
	    var txt = $('#content h2 a').eq(0).text();
	    $('#content h2').eq(0).html('<span>' + txt + '</span>');

	    //Keep links from populating history.
	    $('#content div.field-item a').click(function(){
		    window.location.replace($(this).attr('href'));//No history;
		    return false;
		});
	})
})(jQuery);
