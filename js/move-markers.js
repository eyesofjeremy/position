// move-markers.js

$(document).ready(function() {

	$('#edit').click(function(e) {
		e.preventDefault();
		$('body').addClass('edit');
		$( ".marker" ).draggable( "option", "disabled", false );
	});

	$('#normal').click(function(e) {
		e.preventDefault();
		$('body').removeClass('edit');
		$( ".marker" ).draggable( "option", "disabled", true );
		location.reload(true);
	});

	$(".marker").draggable({
		disabled: true,
		containment: '#glassbox', 
		scroll: false,
		start: function(event, ui) {
			$(this).removeAttr('style');
		},
		stop: function(event, ui) { 
			var coords =[];
			var coord = $(this).position();
			var containerWidth = $('#glassbox').width();
			var containerHeight = $('#glassbox').height();
			var percentLeft = parseFloat(coord.left / containerWidth * 100);
			var percentDown = parseFloat(coord.top / containerHeight * 100);
			var elemID = $(this).attr('rel');

			if(percentLeft > 50) {
				var posHoriz = parseFloat( (containerWidth - (coord.left + $(this).outerWidth()) ) / containerWidth * 100);
				var horizAnchor = 'right: ';
			} else {
				var posHoriz = percentLeft;
				var horizAnchor = 'left: ';
			}

			if(percentDown > 50) {
				var posVert = parseFloat( (containerHeight - (coord.top + $(this).outerHeight()) ) / containerHeight * 100);
				var vertAnchor = 'bottom: ';
			} else {
				var posVert = percentDown;
				var vertAnchor = 'top: ';
			}

			var posX = posHoriz.toFixed(2);
			var posY = posVert.toFixed(2);
			var horizcoord = horizAnchor + posX + '%';
			var vertcoord = vertAnchor + posY + '%';
			var item={ coordTop: vertcoord, coordLeft: horizcoord, coordID: elemID };
			coords.push(item);
			console.log(coords);
			var order = { coords: coords };
			$.post('updatecoords.php', 'data='+$.toJSON(order), function(response){
				if(response == "success") {
					$("#respond").html('<div class="success">X and Y Coordinates Saved!</div>').hide().fadeIn(1000);
					setTimeout(function(){ $('#respond').fadeOut(1000); }, 2000);
				} else {
					$("#respond").html('<div class="error">No workee!</div>').hide().fadeIn(1000);
					setTimeout(function(){ $('#respond').fadeOut(1000); }, 2000);
				}
			});	
		}
	 });
});
