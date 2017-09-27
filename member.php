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
	<div style = "text-align:center;"><div/>

	<h1>Welcome to Pauline's Potluck Party Page</h1>
	<p>Make sure you setup your profile<p/>
	<button class="button" style="vertical-align:middle" onclick="location.href='yourProfile.html'"><span>Profile</span></button>
	<button class="button" style="vertical-align:middle"><span>RSVP now</span></button>


	<h1>View Attendees</h1>
	<p>Link to member/Food item document</p>
	<button class="button" style="vertical-align:middle"><span>View Attendees</span></button>

  <center>
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

  </center>
<hr>
  <center>
      <div id="POItablediv">
    <table id="POITable" border="1">
        <tr>
            <td>Name</td>
            <td>Attendance</td>
            <td>Add Row?</td>
        </tr>
        <!-- <tr> 
            <td>1</td>
            <td><input size=25 type="text" id="latbox"/></td>
            <td><input size=25 type="text" id="lngbox" /></td>
            <td><input type="button" id="delPOIbutton" value="Delete" onclick="deleteRow(this)"/></td>
            <td><input type="button" id="addmorePOIbutton" value="Add" onclick="insRow()"/></td>
        </tr> -->
        <tr>
		<form action="member.php" method="post">
            <td>
        		<input type="text" name="Name" placeholder="First & Last Name">
            </td>
            <td>
            	<input type="radio" name="attendance" value="Yes">Yes
            	<input type="radio" name="attendance" value="No">No
            </td>
            <td>
            	<input type="submit" name="Submit" value="Add">
            </td>
        </form>
        </tr>
    </table>

    <?php
	    $name = $_POST["Name"]; //You have to get the form data
	    $attending = $_POST["attendance"];
	    $filename = 'RSVPList.txt';

	    $fp = fopen($filename, 'a+'); //Open your .txt file
	    fwrite($fp , $name . ":" . $attending . "\n"); //Now lets write it in there
	    
	    fclose($fp); //Finally close our .txt

	?>






    <script type="text/javascript">
      function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}


function insRow()
{
    console.log( 'hi');
    var x=document.getElementById('POITable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    new_row.cells[0].innerHTML = len;
    
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id += len;
    inp1.value = '';
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id += len;
    inp2.value = '';
    x.appendChild( new_row );
}
    </script>
  </center>


</body>
</html>