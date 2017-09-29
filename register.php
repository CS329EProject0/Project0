<?php
	    $userName = $_POST["userName"]; //You have to get the form data
	    $password = $_POST["password"];
	    $filename = 'userList.txt';

	    $fp = fopen($filename, 'a+'); //Open your .txt file
	    fwrite($fp , $userName . ":" . $password . ":" . "\n"); //Now lets write it in there
	    
	    fclose($fp); //Finally close our .txt
	    header('Location: member.php'); 
    	die();

	?>