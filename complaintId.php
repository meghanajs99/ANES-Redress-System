<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="icon" type="image/ico" href="logo.jpg"/>
<title>Complaint</title>
<link rel="stylesheet" href="styles.css">
<style >
.sivaji {
  
  width:60%;
  border-radius: 30px;
  margin-left:35%;
  max-width: 500px;
  padding: 70px;
   float:"center";
  background-color: #B22222;
  
}
body{
   background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url(formbackground.jpg);
}
input[type=text] {
  width: 60%;
  background-image: white;
    padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<script language="javascript">
function validate()
{
var num1=/^[0-9]*$/;
if(f2.cid.value==" "){
alert("ID Field Must Not Be Empty");
return false;
}
else if(!(f2.cid.value.match(num1))){
alert("Invalid complaint ID");
return false;
}
}
</script>
</head>
<body>
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
     <a>Mr.s.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul><br><br><br>
<div class="sivaji" >
  <form name="f2" action="complaint.php"  method="POST"> 
  <center>
    <div align="left">
	<b style="font-size:30px;">Complaint Id:</b>
	<input type="text" id="cid" name="cid" placeholder="Enter ID" required><br><br><br>
	<center><input  class="buttonW" type="submit" name="subData" id="b1" value="Submit" onclick="validate()"></center>
	</center>
</form>
</div>
</body>
</html>
