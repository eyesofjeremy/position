<?php 
	include ('dbconnect.php');

	$link = mysqli_connect($host, $username, $password) or die("MySQL Error: " . mysqli_error());
	mysqli_select_db($link, $database) or die("MySQL Error: " . mysqli_error());

	$default = 'ecosys'; // set default group of markers
	$markers = ( isset($_GET['markers']) ) ? $_GET['markers'] : $default;
	$copy = ( isset($_GET['copy']) ) ? TRUE : FALSE;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Move the markers</title>

	<link rel="stylesheet" href="style.css" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.json-2.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.zclip.min.js"></script>
</head>

<body>

<div id="page" class="<?php echo $markers; ?>">
<h1>Move Markers</h1>
<p>This tool will help you tell me exactly where you'd like all of the markers to be.</p>
<p>To start, click on one of the sections: <a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=ecosys" id="ecosys">Ecosys</a> / 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=Policy" id="Policy">Policy</a> / 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=GWuse" id="GWuse">Water Use</a>
</p>

<p>Then click on the 'edit' link, and when markers are blue, you can move them around. That is all you need for now—I can copy the positions and get that into the system.</p>
<a href="#edit" id="edit">Edit</a> / <a href="#" id="normal">Normal</a> / <a href="copy.php?markers=<?php echo $markers; ?>">Copy Position</a>

<div id="glassbox"><img src="groundwater.jpg">
<?php 
	$get_water_elements = mysqli_query($link, "SELECT * FROM water_elements");
	
	$water_elements = array();
	while($row = mysqli_fetch_array($get_water_elements)) {
		if(strpos($row['Name'], $markers.'_') !== FALSE) {
			echo '<a class="marker" rel="'.$row['id'].'" style="'.$row['horiz'].'; '.$row['vert'].'">'.$row['Label'].'</a>';
		}
	}	
?>
</div>
<div id="respond"></div>


</div>
</body>
<script type="text/javascript">
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

</script>

</html>