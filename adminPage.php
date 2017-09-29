<!DOCTYPE html>
<html>

<!-- calling the webDesign-->
<link rel="stylesheet" href="webDesign.css">

<head>
	<title>Admin</title>
</head>
<body>


	<h1>Welcome, Admin</h1>
	<p>Here you can view or remove members, and create or edit events.</p>

	<h1>Edit Party</h1>
	<p>Click here to edit the guest list for your party.</p>
	<button onclick="">Party is Over</button>
	
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
	$counter = 0;
    
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
	</center>
</div>


</html>