(function($){



    function setupLinks(){
	var index = 0;

	$('span.file').find('img').hide().end().each(function(){
		
		$(this).find('a').each(function(){
			var is_mp3 = ($(this).attr('href').indexOf('.mp3') !== -1);

			index+=1;
			var id = 'player' + index;
			$(this).attr('id', id);

			//Undocumented by Flowplayer, but the element 
			//we're using as a container must be empty, or else
			//the player won't embed as the page loads.
			//Empty it.



			//Some styles
			if(!is_mp3){
			    $(this).attr('style', 'display:block; margin-bottom:3em;').height(300).width(450);
			}else{
			    $(this).attr('style', 'display:block; margin-bottom:3em;').height(45).width(450);
			}

			$(this).empty();

			//Embed Flowplayer


			flowplayer(id, totalpain_media.player, {
				canvas:{backgroundColor:'#FFFFFF', backgroundGradient:'none'},
				plugins: {


				    controls: {autoHide: false, fullscreen:false, height:30, tooltips:{buttons:false, marginBottom:5}, time:false}
				},  clip:{autoPlay:true},

				version: [9, 115],
				    onFail: function()  {//Custom error message
				    document.getElementById("info").innerHTML =
					"You need the latest Flash version to view this movie. " +
					"Your version is " + this.getVersion()
					}
			    });
		    });
	    });
    };



    $(document).ready(function(){
	    setupLinks();
	});



})(jQuery);