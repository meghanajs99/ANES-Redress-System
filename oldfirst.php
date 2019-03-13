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
	width: 200px;
	height: 200px ;
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="inp" type="submit" name="Logout" value="logout">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <p>Prof.XYZ</p><p>Cse Dept</p><p>xyz@anits.edu.in</p><p>9999999999</p>
    </div>
  </li>
</ul>
<br>
<form action="secondprocess.php" method="post">
<div class="row">
<div class="column1"><br><br><br><br>
<center>
 <input type="submit" class="buttonB" id="type" name="type" value="Electrical"></input><br>
</center>

</div>
<div class="column2">
<br><br><br><br>
<img src="carpenter.jpg" align="center">
<center>
<input type="submit"  class="buttonW" id="type" name="type" value="Carpentery" ></input><br>
</center>
 </div>
<div class="column1">
<br><br><br><br>
<img src="systems.png" align="center">
<center>
<input type="submit" class="buttonB" id="type" name="type" value="Systems"></input><br>
</center>
  </div>
<div class="column2">
<br><br><br><br>
<img src="plumber.png" align="center">
<center>
<input type="submit" class="buttonW" id="type" name="type" value="Plumbing"></input><br>
</center>
  </div>
  <div class="column1">
<br><br><br><br>
<a href="secondprocess.php"><img src="miss.png" align="center"></a>
<center>
<input type="submit" class="buttonB" id="type" name="type" value="Misscellenaus"></input><br>
</center>
  </div>
  </div>
</form>
</body>
</html>
  