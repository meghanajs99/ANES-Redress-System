<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="icon" type="image/ico" href="images/logo.jpg" />
<link rel="stylesheet" href="stylelogin.css">
<script src="validate.js"></script>
</head>
<style>
body
{
  overflow: hidden;
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
  width: 60%;
  height: 1000px;  
    background-image: url("complaintf.jpg");
    filter: brightness(200%);
      /*filter: saturate(800%);
             filter: drop-shadow(8px 8px 10px gray);

*/background-position: left;
 background-size:1200px 850px ;
 opacity: 2.0;
 background-repeat: no-repeat;
 background-attachment: fixed;
}
.column2 {
  float: left;
  width: 40%;
  height: 1000px;
  background-color: #B22222;
}
.navin
{
  color:white;
  border:none;
  background-color:#0001;
  font-size:30px;
}
</style>
</head>
<body>
<center>
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
<div class="row">
<div class="column1"><br>
</div> 
<div class="column2"><br>
<h1 align="center">Admin Login</h1>
 <div align="center">
  <form name="f2" action="adminProcess.php"  method="POST" class="container">
    <div align="center">
      <img  src="admin.png" alt="Admin" class="avatar">
    </div>
  <center>
    <div >
      <div align="left">
      <label for="uname" align="left"><b>User ID</b></label></div></div>
      <input type="text" placeholder="Enter UserId" id="uid" name="uid" class="form-control" required>
    <div align="left"><label for="psw1"><b>Password</b></label></div>
      <input type="password" placeholder="Enter Password" id="psw1" name="psw1" class="form-control" required>
    <div style="text-align: center">
      <input  class="button1" type="submit" name="subData" id="b1" value="Login" onclick="validate()">
    </div>
    </center>
    </div>
  </form>
  </div>
</div> 
</center>
</body>
</html>