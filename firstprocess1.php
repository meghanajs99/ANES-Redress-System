<?php
   
   mysql_connect("localhost","root","root");
   mysql_select_db("complaintdatabse");
   
   if(isset($_POST['View Complaints'])){
   $selected_val = $_POST['compType']; 
	if($selected_val=='Systems')
	{
	    echo '<script>window.open("compl.php","_self")</script>';
	}
	if($selected_val=="Plumbing")
	{
	   echo '<script>window.open("second.php","_self")</script>';
	}
	if($selected_val=="Electrical")
	{
	   echo '<script>window.open("second.php","_self")</script>';
	}
     if($selected_val=="Carpentery")
	{
	   echo '<script>window.open("second.php","_self")</script>';
	}
   }
?>