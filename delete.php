<?php	
	$row_number = $_GET['delete'];
	$file_out = file("RSVPList.txt"); // Read the whole file into an array

	//Delete the recorded line
	unset($file_out[$row_number]);

	//Recorded in a file
	file_put_contents("RSVPList.txt", implode("", $file_out));
	header('Location: attendees.php'); 
?>