<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- calling the webDesign-->
<link rel="stylesheet" href="webDesign.css">
</head>
<body>
<div class="container">

	<center>
	<h1>Welcome, Admin</h1>
	<p>Here you can view or remove members, and create or edit events.</p>

	<h1>Edit Party</h1>
	<p>Click here to edit the guest list for your party.</p>
	
	<table width="100%" border="1" class="table-hover table-inverse" style="text-align: center;">
    <tr>
        <td><h4>Name</h4></td>
        <td><h4>Attending?</h4></td>
        <td><h4>Item they are bringing</h4></td>
        <td><h4>Edit</h4></td>
    </tr>

	<?php
	$file_handle = fopen("RSVPList.txt", "rb");
	$counter = -1;
    
	while (!feof($file_handle)) {
		$counter++;
	    $line_of_text = fgets($file_handle);
	    $parts = explode(':', $line_of_text);
	    echo "<form action='delete.php' method='post'><tr><td>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td><td>
	    	<a class='button' href='delete.php?delete=".$counter."'>Delete</a>
	    	</td></tr></form>";
		}
	fclose($file_handle);
	?>

	</table>

	<button class="button" style="vertical-align:middle" onclick="location.href='member.php'"><span>RSVP</span></button>
	</center>
	
</div>


</html>