
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="icon" type="image/ico" href="images/logo.jpg" />
<link rel="stylesheet" href="stylelogin.css">
<script>
function validate()
{
var num1=/^[0-9]*$/;
var un1=/^[a-zA-Z0-9]*$/;
 if(f2.uid.value=="")
 {
alert("User ID Field Must Not Be Empty");
return false;
}
else if(!(f2.uid.value.match(num1)))
{
alert("Invalid User ID");
return false;
}
else if(f2.psw1.value=="")
{
alert("Password Field Must Not Be Empty");
return false;
}
else if(!(f2.psw1.value.match(un1)))
{
alert("Password Must Be Alphabets and Numbers");
return false;
} 
}
</script>
</head>
<body>
<center>
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
<h1 align="center">Student Login</h1>
 <div align="center">
  <form name="f2" action="studentProcess.php"  method="POST" class="container">
    <div align="center">
      <img  src="student.png" alt="Student" class="avatar">
    </div>
  <center>
    <div >
      <div align="left">
      <label for="uname" align="left"><b>User ID</b></label></div></div>
      <input type="text" placeholder="Enter UserId" id="uid" name="uid" class="form-control" required>
    <div align="left"><label for="psw1"><b>Password</b></label></div>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" class="form-control" required>
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