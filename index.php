<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="webDesign.css">
</head>

<body>
	<div style = "text-align:center;"><img src="https://i.imgur.com/KVyTWVb.png" width="1000" height="400"><div/>

<!-- <div style="text-align: center;">
    <center>
  <table border = "1" width = "50%"
   summary = "event name">
  <caption> PPP event </caption>
  <thead>
    <tr>
      <th> Name </th><th> attendance </th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td> Michael Palin </td><td> attend </td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td> Graham Chapman </td><td> not attending </td>
    </tr>
    <tr>
      <td> John Cleese </td><td> attend </td>
    </tr>
    <tr>
      <td> Terry Gilliam </td><td> attend </td>
    </tr>
    <tr>
      <td> Eric Idle </td><td> attend </td>
    </tr>
    <tr>
      <td> Terry Jones </td><td> attend </td>
    </tr>
    
  </tbody>
  </table>
  </center>
  </div> //-->

	<p>
		<button class="button" style="vertical-align:middle" onclick="location.href='signIn.html'"><span>Login</span></button>
		<button class="button" style="vertical-align:middle" onclick="location.href='register.html'"><span>Register</span></button>
    </p>

<div>
	<center>
	<table width="50%" border="1" style="text-align: center;">
    <tr>
        <td><h3>Name</h3></td>
        <td><h3>Attending?</h3></td>
    </tr>
<?php
$file_handle = fopen("RSVPList.txt", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(':', $line_of_text);
    echo "<tr><td>$parts[0]</td><td>$parts[1]</td></tr>";
}
fclose($file_handle);
?>
</table>
</center>
</div>


</body>

</html>