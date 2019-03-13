<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="icon" type="image/ico" href="logo.jpg"/>
<title>ComplaintStatus</title>
<link rel="stylesheet" href="styles.css">
<style>

img{
	width:500px;
	height:300px;
}
p{
color:#82cadf;
text-align:center;
font-size:50px;
}

</style>
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a href="admin_login.php">Admin</a>
      <a href="student_login.php">Student</a>
      <a class="active" href="faculty_login.php">Faculty</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <p>Prof.XYZ</p><p>Cse Dept</p><p>xyz@anits.edu.in</p><p>9999999999</p>
    </div>
  </li>
</ul>
<?php
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
   
   $complaintId=$_POST['cid'];
    
   $complaintId=stripcslashes($complaintId);
   $complaintId=mysql_real_escape_string($complaintId);
   
   $sql="select *from complaints where Id='$complaintId'";
   
   $result=mysqli_query($con,$sql) ;      
   $row = mysqli_fetch_assoc($result);
	
	if($row['id']==$complaintId)
	{
		echo "<p>".$row['status']."</p>";
	   //echo "<center><img src='images/111.jpg'></center></br>";
	   echo "<center><h2>Please provide your valuable feedback</h2></center>";
       echo '<center><form action="feedback.php" method="POST">
  	<input type="hidden" name="id" value="$_SESSION["uid"]">
    <textarea id="message" name="message" rows="5" cols="30" class="form-control" required>Enter Feedback.</textarea>
    <input type="submit" class="buttonU" name="submit" value="Submit"/></form></center>';   
	}
	else
	{
	   echo'<script>window.open("display.php","_self")</script>';
	}
?>
</body>
</html>