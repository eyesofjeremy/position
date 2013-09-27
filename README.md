# Position

## Draggable persistent elements using MySQL and jQuery.

### Features

* absolutely positioned elements draggable via jQuery UI (ho hum)
* elements are persistent--i.e., drag an element and reload to find it stays where you put it (well, yes)
* Element positions are specified as a percentage, in relation to the closest edges of the containing div (ooh, different!)
* You can drag them around, then copy the CSS to your clipboard (handy)
* Not much else.

----
This documents a tool I created while working on a simple groundwater modeling project.

In the process, I found that I wanted to have clickable labels overlaying a visual model (thank you [Andy Seery](http://andyseery.com)), but I could not really tell where my client wanted the labels to be.

I also knew that I wanted these to be absolutely positioned, based on a percentage of their parent element.

There are a number of instances which document using jQuery in conjunction with MySQL to create persistent, draggable elements. But I had not seen anything using percentages, in particular percentages which switch from left to right, top to bottom, depending on which edge a label is closer to.

NOTE: The files here include a sample SQL table to add to a new database. Not included is dbconnect.php, which needs to look like this:

	<?php
	  $host="mysql.host.here";
	  $username="username";
	  $password="password";
	  $database="yourDatabaseName";
	?>

TODO: Would be nice to have this all in one file.
