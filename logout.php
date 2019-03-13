<?php
   SESSION_START();
   
   $_SESSION=array();
   session_destroy()
   ?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
li {
  float: left;
  font-size:20px;
}
li a, .dropbtn {
  display: inline-block;
  color: #82cadf;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover,.dropdown:hover .dropbtn {
  background-color: white;
  color:#82cadf;
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
  color:#336699;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
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
  <li class="dropdown">
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
     <p>Prof.XYZ</p><p>Cse Dept</p><p>xyz@anits.edu.in</p><p>9999999999</p>
    </div>
  </li>
</ul>
<p class="p1" >You have successfully logged out!</p>
</body>
</html>