// copy-markers.js

$(document).ready(function() {

	$('.marker').zclip({
		path:'js/swf/ZeroClipboard.swf',
		copy:function(){
			return $(this).attr('style');
		}
	});	

});

