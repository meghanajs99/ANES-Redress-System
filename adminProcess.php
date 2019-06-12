<?php
SESSION_START();
   $con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
   $userId=$_POST['uid'];
   $password=$_POST['psw1'];
   
   $userId=stripslashes($_REQUEST['uid']);
   $password=stripslashes($_REQUEST['psw1']);
   $userId=mysqli_real_escape_string($con,$userId);
   $password=mysqli_real_escape_string($con,$password);
   $sql="SELECT * from Admins where Id='$userId' and Password='$password'";
	$result=mysqli_query($con,$sql);   
	$row = mysqli_fetch_assoc($result);
	if($row['Id']==$userId && $row['Password']==$password)
	{
	    echo '<script>window.open("first.php","_self")</script>';
	}
	else
	{
	   echo '<script>window.open("display.php","_self")</script>';
	}

      ?>