<!DOCTYPE html>
<html>

<!-- calling the webDesign-->
<link rel="stylesheet" href="webDesign.css">

<head>
	<title>Admin</title>
</head>
<body>


	<h1>Welcome, Pauline</h1>
	<p>Here you can approve guests, view or remove members, and create or edit events.</p>

	<!-- 
	<h2>Attendee List</h2>
	<p>See who's coming.</p>
	<button class = "button" button type = "submit" onclick="location.href='attendees.php'">View Attendees</button> -->

	<h1>Edit Party</h1>
	<p>Click here to edit the guest list for your party.</p>
	
	<div>
	<center>
	<table width="100%" border="1" style="text-align: center;">
    <tr>
        <td><h4>Name</h4></td>
        <td><h4>Attending?</h4></td>
        <td><h4>Item they are bringing</h4></td>
        <td><h4>Edit</h4></td>
    </tr>
	<?php
	$file_handle = fopen("RSVPList.txt", "rb");

	while (!feof($file_handle) ) {
	    $line_of_text = fgets($file_handle);
	    $parts = explode(':', $line_of_text);
	    echo "<form action='delete.php' method='post'><tr><td>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td><td>

	    	<input type='submit' name='Delete' class='button' value='Delete'>
	    	<br>
	    	<a href='delete.php?action=delete'>DELETE</a>

	    	</td></tr></form>";
	}
	fclose($file_handle);





	?>


	</table>
	</center>
</div>


</html>