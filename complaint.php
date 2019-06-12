<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="icon" type="image/ico" href="logo.jpg"/>
<title>ComplaintStatus</title>
<link rel="stylesheet" href="styles.css">
<style>

.buttonU
{
  background-color: #fefefe;
  color: #3e94ce;
  text-align:center;
  font-size:30px;
  border:solid #3e94ce;
  border-radius: 30px;
  padding: 20px ;
}
img{
	width:500px;
	height:300px;
}
p{
color:#3e94ce;
text-align:center;
font-size:50px;
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
</ul>
<?php
session_start();
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
   
   $complaintId=$_POST['cid'];
    
   $complaintId=stripslashes($_REQUEST['cid']);
   $complaintId=mysqli_real_escape_string($con,$complaintId);
   
   $sql="select *from complaints where Id='$complaintId'";
   
   $result=mysqli_query($con,$sql) ;      
   $row = mysqli_fetch_assoc($result);
	
	if($row['id']==$complaintId)
	{
		echo "<p>".$row['status']."</p>";
	   //echo "<center><img src='images/111.jpg'></center></br>";
	   echo "<center><h2 style='color:red;'>Please provide your valuable feedback</h2></center>";
       echo '<center><form action="feedback.php" method="POST">
  	<input type="hidden" name="id" value="$_SESSION["uid"]">
    <textarea id="message" name="message" rows="5" cols="30" class="form-control" required>Enter Feedback.</textarea>
   <div align="center"> <input type="submit" class="buttonU" name="submit" value="Submit"/></form></center></div>';   
	}
	else
	{
	   echo'<script>window.open("display.php","_self")</script>';
	}
?>
</body>
</html>