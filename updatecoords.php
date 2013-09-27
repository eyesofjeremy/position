<?php
if(!$_POST["data"]){
	echo "Nothing Sent";
	exit;
}

include ('dbconnect.php');

$link = mysqli_connect($host, $username, $password) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($link, $database) or die("MySQL Error: " . mysqli_error());

//decode JSON data received from AJAX POST request
$data = json_decode(stripcslashes($_POST["data"]));

foreach($data->coords as $item) {
	//Extract X number for panel
	$coord_X = $item->coordLeft;
	//Extract Y number for panel
	$coord_Y = $item->coordTop;
	//escape just-in case
	$x_coord = mysqli_real_escape_string($link, $coord_X);
	$y_coord = mysqli_real_escape_string($link, $coord_Y);
	$id_coord = mysqli_real_escape_string($link, $item->coordID);
	
	//Setup Query
	$sql = mysqli_prepare($link, "UPDATE water_elements SET horiz = '$x_coord', vert = '$y_coord' where ID = $id_coord");
	
	//Execute Query
	mysqli_stmt_execute($sql) or die("Error updating water_elements :".mysqli_error());
	
}

//Return Success
echo "success";



?>
