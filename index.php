<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="icon" type="image/ico" href="images/logo.jpg" />
<link rel="stylesheet" href="stylehome.css">
</head>
<body>
<ul>
<li><a href="index.php">Home</a></li>
 <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a class="active" href="admin_login.php">Admin</a>
      <a href="student_login.php">Student</a>
      <a href="faculty_login.php">Faculty</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.Joshua Johnson</a><a>Cse Dept</a><a>jj@anits.edu.in</a><a>9984672345</a>
    </div>
</li>
</ul>
<center>
<div class="f1" align="center">
<h1 class="h" >ANES Complaint Redress System</h1>
</div>
</center>
<MARQUEE >LOST AND FOUND!
 <?php
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
	$query = "select * from banner;";
    $mysqli_result = mysqli_query($con,$query);
	if ($result=mysqli_query($con,$query))
  {
    while($row = mysqli_fetch_assoc($result))
	{  
	 echo  $row['userid'];
	 echo ":";
	 echo $row['description'];
	}
  }
	?>
	</MARQUEE>
<center>
<div class="f1" align="center">
<center>
<h1 style="color:orange;">Contact Persons</h1>
<h1 style="color:orange;">NOTE:-In case of fake complaints a fine of Rs.500/- will be implemented.</h1>
</center>
<h1 align="left" style="color:yellow;">Round Clock Service:</h1>
<b align="center">Electrical and Plumbing:7093505209</b><br>
<b align="center">House Keeping:7093505409</b><br>
<h1 align="left" style="color:yellow;">Supervisor Contact Details:</h1>
<b align="center">Electrical Supervisor:9177065222</b><br>
<b align="center">Plumbing Supervisor:8978884005</b><br>
<h1 align="left" style="color:yellow;">Emergency calls:</h1>
<b align="center">Mr.RamaKrishna[MaintenanceManager]:8008901266</b><br>
<b align="center">Mr.Dharma Rao[CampusManager]:8008176766</b> <br>
</div>
</center>
</body>
</html>
