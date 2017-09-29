<?php
	    $name = $_POST["Name"]; //You have to get the form data
	    $attending = $_POST["attendance"];
	    $item = $_POST["item"];
	    $filename = 'RSVPList.txt';

	    $fp = fopen($filename, 'a+'); //Open your .txt file
	    fwrite($fp , $name . ":" . $attending . ":" . $item . "\n"); //Now lets write it in there
	    
	    fclose($fp); //Finally close our .txt
	    header('Location: attendees.php'); 
    	die();

	?>