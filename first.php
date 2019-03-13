<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg"/>
<link rel="stylesheet" href="styles.css">
<style>
img{
	width: 350px;
	height: 350px ;
}
button{
	border:none;
	
}
</style>
</head>
<body>
<ul>
<li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="inp" type="submit" name="Logout" value="logout">
</form></li>
<li style="float:right"><form action="viewfeedback.php" method="post">
    <input class="input" type="submit" name="view" value="Feedbacks">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.Joshua Johnson</a><a>Cse Dept</a><a>jj@anits.edu.in</a><a>9984672345</a>
    </div>
</li>
</ul>
<br>
<form action="secondprocess.php" method="post">
<div class="row">
<div class="column1"><br><br><br><br>
<button name="type" value="Electrical"><img src="electrical.jpg" align="center" alt="Electrical"></button>
<center>
 <input type="submit" class="buttonB" id="Electrical" name="type" value="Electrical"></input><br>
</center>
</div>
<div class="column1">
<br><br><br><br>
<button name="type" value="Carpentery"><img src="carpenter.jpg" align="center" alt="Carpentery"></button>
<center>
<input type="submit"  class="buttonB" id="Carpentery" name="type" value="Carpentery" ></input><br>
</center>
 </div>
<div class="column1">
<br><br><br><br>
<button name="type" value="Systems"><img src="systems.png" align="center" alt="Systems"></button>
<center>
<input type="submit" class="buttonB" id="Systems" name="type" value="Systems"></input><br>
</center>
  </div>
<div class="column1">
<br><br><br><br>
<button name="type" value="Plumbing"><img src="plumber.png" align="center" alt="Plumbing"></button>
<center>
<input type="submit" class="buttonB" id="Plumbing" name="type" value="Plumbing"></input><br>
</center>
  </div>
  <div class="column1">
<br><br><br><br>
<button name="type" value="miscellaneous"><img src="miss.png" align="center" alt="Miscellaneus"></button>
<center>
<input type="submit" class="buttonB" id="Miscellaneus" name="type" value="miscellaneous"></input><br>
</center>
  </div>
  </div>
</form>
</body>
</html>
  