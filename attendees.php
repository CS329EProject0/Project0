<!DOCTYPE html>
<html>

<!-- calling the webDesign-->
<link rel="stylesheet" href="webDesign.css">

<head>
<!--page contents -->
	<title>Member Page</title>
  <link rel="stylesheet" href="webDesign.css">
</head>
<body>
    <div style = "text-align:center;"><img src="https://imgur.com/kpNpKOK.png" width="100%" height="auto"><div/>
	<div style = "text-align:center;"><div/>

	<h1>List of Attendees</h1>
  <center>
  	<div>
		<center>
		<table width="100%" style="text-align: center;">
	    <tr>
	        <td><h3>Name</h3></td>
	        <td><h3>Attending?</h3></td>
            <td><h3>Item They Are Bringing</h3></td>
	    </tr>
		<?php
		$file_handle = fopen("RSVPList.txt", "rb");

		while (!feof($file_handle) ) {
		    $line_of_text = fgets($file_handle);
		    $parts = explode(':', $line_of_text);
		    echo "<tr><td>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td></tr>";
		}
		fclose($file_handle);
		?>
		</table>
		</center>
	</div>
    <button class="button" style="vertical-align:middle" onclick="location.href='yourProfile.html'"><span>Profile</span></button>
    <button class="button" style="vertical-align:middle" onclick="location.href='member.php'"><span>RSVP now</span></button>
</body>
</html>