<?php
   session_start();
   
   $userId=$_POST['uid'];
   $password=$_POST['psw1'];
   
   $userId=stripcslashes($userId);
   $password=stripcslashes($password);
   $userId=mysql_real_escape_string($userId);
   $password=mysql_real_escape_string($password);
   
   mysql_connect("localhost","root","root");
   mysql_select_db("complaintdatabase");
   
   $result=mysql_query("select *from Admins where Id='$userId' and Password='$password'")
           or die ("Failed to query database".mysql_error());
		   
	$row=mysql_fetch_array($result);
	if($row['Id']==$userId && $row['Password']==$password)
	{
	    echo '<script>window.open("first.php","_self")</script>';
	}
	else
	{
	   echo '<script>window.open("display.php","_self")</script>';
	}
?>