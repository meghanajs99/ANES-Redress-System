<?php

session_start();
$_SESSION=array();
session_destroy();

header("Location: index.php");
exit;
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="icon" type="image/ico" href="logo.jpg"/>
<link rel="stylesheet" href="styles.css">
<style>

.container
{
  position: absolute;
  right: 350px;
  margin: 100px;
  max-width: 600px;
  padding: 150px;
  background-color:white;
}
.p1{
color:#336699;
text-align:center;
font-size:50px;
}
p{
color:#336699;

}
</style>
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
     <p>Mr.S.Joshua Johnson</p><p>Asst.Professor</p><p>Cse Dept</p><p>joshua.cse@anits.edu.in</p><p>9573382650</p>
    </div>
  </li>
</ul>
<p class="p1" >You have successfully logged out!</p>
</body>
</html>