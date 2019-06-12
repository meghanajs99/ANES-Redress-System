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
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #82cadf;
  overflow: hidden;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
li {
  float: left;
  font-size:30px;
  border: 1px solid #82cadf
}
li a, .dropbtn {
  display: inline-block;
  color: white;

  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover,.dropdown:hover .dropbtn {
  background-color: #82cadf;
  color:white;
}
li.dropdown 
{
  display: block;
}
.dropdown-content
{ 
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color:#82cadf;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color:#82cadf}
.dropdown:hover .dropdown-content {
  display: block;
}
  .imgb
  {
    border:none;
  }
.navinput{
  color:white;
  padding: 10px;
  border-left:3px solid white;
  background-color:#82cadf;
  font-size:30px;
}
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
<br>
<div class="row">
<div class="column1"><br>
<button  style="background-color:white;color:#82cadf;"  type="new complaint" class="button" onclick="parent.location='complaintform.php'">
NEW COMPLAINT</button>
<button class="imgb" name="type" value="new"><img src="images/new.jpg"></button>
</div> 

<div class="column2"><br><br><br>
<button type="check status" class="button"  onclick="parent.location='complaintId.php'">CHECK STATUS</button>
<button class="imgb" name="type" value="check"><img src="images/track-order.jpg"></button>
</div> 
</center>
</body>
</html>