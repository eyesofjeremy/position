<?php 
	include ('dbconnect.php');

	$link = mysqli_connect($host, $username, $password) or die("MySQL Error: " . mysqli_error());
	mysqli_select_db($link, $database) or die("MySQL Error: " . mysqli_error());

	$default = 'ecosys'; // set default group of markers
	$markers = (isset($_GET['markers'])) ? $_GET['markers'] : $default;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saving Coordinate State with jQuery</title>

	<link rel="stylesheet" href="style.css" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.json-2.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.zclip.min.js"></script>

</head>

<body>

<div id="page" class="<?php echo $markers; ?>">
<h1>Copy Marker Positions</h1>
<div id="links">
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=ecosys" id="ecosys">Ecosys</a> / 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=Policy" id="Policy">Policy</a> / 
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?markers=GWuse" id="GWuse">Water Use</a>
</div>

<a href="index.php?markers=<?php echo $markers; ?>" id="edit">Back to Editor</a>
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

</body>
<script type="text/javascript">
	$(document).ready(function() {
	
        $('.marker').zclip({
            path:'js/swf/ZeroClipboard.swf',
            copy:function(){
                return $(this).attr('style');
            }
        });	

	});

</script>

</html>