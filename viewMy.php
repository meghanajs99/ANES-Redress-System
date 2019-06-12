<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg"/>
<link rel="stylesheet" href="styletable.css">
<style>
  marquee
{
  font-size: 30px;  
    color:white;
  text-decoration: bold;
}
</style>
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
</ul><br><br>
<marquee>PLEASE SCROLL DOWN TO GIVE FEEDBACK</marquee>
<?php
session_start();
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  $id=$_SESSION['uid'];
   $sql="SELECT * from complaints where userid='$id'";
    echo "<center><table><tr><th>ID</th><th>Department</th><th>Room No.</th><th>Type</th><th>Description</th><th>Status</th></tr>" ;
	if ($result=mysqli_query($con,$sql))
  {
    while($row = mysqli_fetch_assoc($result)) {  
        echo "<td> " . $row["id"]. "</td>";
		echo "<td> " . $row["department"]. "</td>";
		echo "<td> " . $row["roomno"]. "</td>";
		echo "<td> " . $row["type"]. "</td>";
		echo "<td> " . $row["description"]. "</td>";
		echo "<td> " . $row["status"]. "</td>";
		echo "<tr>"; 
    }
  }
	echo "</table></center>";
	echo "<center><h2>Please provide your valuable feedback</h2></center>";
       echo '<center><form action="feedback.php" method="POST">
  	<input type="hidden" name="id" value="$_SESSION["uid"]">
    <textarea id="message" name="message" rows="5" cols="30" class="form-control" required>Enter Feedback.</textarea>
    <input type="submit" class="buttonU" name="submit" value="Submit"/></form></center>';   
?> 
</body>
</html>