<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>New Complaint and Track Status</title>
<link rel="icon" type="image/ico" href="logo.jpg" />
<link rel="stylesheet" href="styles.css">
<style>

.button 
{
  background-color: #82cadf;
  color: black;
  text-align:center;
  font-size:60px;
  border:dashed;
  padding: 100px ;
  width: 80%;
}
.column1 {
  float: left;
  width: 50%;
  height: 1000px;  
  background-color:white;
}
.column2 {
  float: left;
  width: 50%;
  height: 1000px;
  background-color: #82cadf;
}
body{
	overflow:hidden;
}

</style>
</head>
<body>
<center>
<ul>
  <li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="input" type="submit" name="Logout" value="logout">
</form></li>
<li style="float:right"><form action="viewMy.php" method="post">
    <input class="input" type="submit" name="view" value="My Complaints">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.Joshua Johnson</a><a>Cse Dept</a><a>jj@anits.edu.in</a><a>9984672345</a>
    </div>
</li>
</ul>
<br>
<div class="row">
<div class="column1"><br>
<button  style="background-color:white;color:#82cadf;"  type="new complaint" class="button" onclick="parent.location='complaintform.php'">
NEW COMPLAINT</button>
<img src="images/new.jpg">
</div> 

<div class="column2"><br>
<button type="check status" class="button"  onclick="parent.location='complaintId.php'">CHECK STATUS</button>
<img src="images/track-order.jpg">
</div> 
</center>
</body>
</html>