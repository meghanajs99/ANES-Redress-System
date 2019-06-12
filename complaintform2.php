
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg">
<link rel="stylesheet" href="styletable.css">
</head>
<body>
<ul>
  <li><a href="complaintstatus.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="navinput" type="submit" name="Logout" value="logout">
</form></li>
<li style="float:right"><form action="viewMy.php" method="post">
    <input class="navinput" type="submit" name="view" value="My Complaints">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.S.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul>
<?php
session_start();

if (isset($_POST['mj-submit'])) {
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  $uid=$_SESSION['uid'];
   $dept=$_POST["dept"];
$roomno=$_POST["roomno"];
$type=$_POST["complaint"];
$desc=$_POST["message"];
$dept= mysqli_real_escape_string($con,$dept); 
    
	$roomno= stripslashes($_REQUEST['roomno']);
    $roomno = mysqli_real_escape_string($con,$roomno);
$sql = "INSERT INTO complaints (id,userid,department, roomno, type, description,status)VALUES ('','$uid','$dept', '$roomno', '$type', '$desc','complaint registered') ";

  $result=mysqli_query($con,$sql);

$sql = "SELECT * from complaints where id=LAST_INSERT_ID()";
$result=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);

  echo "<br><br><table align='center'><tr><th>ID</th><th>UserID</th><th>Department</th><th>Room No.</th><th>Type</th><th>Description</th><th>Status</th></tr>" ;
  echo "<tr>";  
        echo "<td> " . $row["id"]. "</td>";
        echo "<td> " . $row["userid"]. "</td>";
		echo "<td> " . $row["department"]. "</td>";
		echo "<td> " . $row["roomno"]. "</td>";
		echo "<td> " . $row["type"]. "</td>";
		echo "<td> " . $row["description"]. "</td>";
		echo "<td> " . $row["status"]. "</td>";
    echo "<tr>"; 
  echo "</table></center>";
}
?>
<br><br>
<div align="center">
<input align="center" name="Done" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/complaintstatus.php')" value="Done" 
				id="Done" >
<input  name="Rechange" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/complaintform.php')" value="Reset" 
				id="Resubmit" ></div>
</body>
</html>