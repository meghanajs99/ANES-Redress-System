<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="icon" type="image/ico" href="logo.jpg" />
<style>
.dropdown 
{
  position: relative;
  color:#fefefe;
  display: inline-block;
  font-size:20px;
}
.dropdown-content
{
  float:right;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
color:#336699;
}
.dropdown:hover .dropdown-content 
{
  display: block;
}
body 
{
 overflow:hidden;
 font-family: Arial, Helvetica, sans-serif;
 margin: 0 5px 10 5px;
 height: 1000px;
 background-image: linear-gradient(#82cadf,#fefefe);
}
h1
{	
 font-family: "Times New Roman", Times, serif;
 font-size: 60px;	
 font-style: italic;
 color:#fefefe;
}
.column 
{
  float: left;
  width: 31%;
  padding: 15px;
}
.row
{
  margin:12px;
}
.button1
{
  background-color: #fefefe;
  border: none;
  color: black;
  padding: 15px 25px;
  text-align: center;
  font-size: 20px;
  cursor: pointer;
  border:solid;
  
  
}
button1:hover 
{
  opacity: 0.8;
}
input[type=text], input[type=password]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button 
{
  background-color: #82cadf;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover
{
  opacity: 0.8;
}
</style>
<script language="javascript">
function validate()
{
var num1=/^anil[0-9]*$/;
var un=/^[a-zA-Z0-9]*$/;
if(f2.uid.value==""){
alert("User ID Field Must Not Be Empty");
return false;
}
if(!(f2.uid.value.match(num1))){
alert("Invalid User ID");
return false;
}
if(f2.psw.value==""){
alert("Password Field Must Not Be Empty");
return false;
}
if(!(f2.psw.value.match(un)))
{
alert("Password Must Be Alphabets and Numbers");
//}
}
</script>
</head>
<body>
<div class="dropdown">
  <span>Contact Us</span>
   <div class="dropdown-content">
    <p>Prof.XYZ</p><p>Cse Dept</p>xyz@anits.edu.in<p>9999999999</p>
   </div>
</div>
<h1 align="center">Complaint Management System</h1>
<div class="row">
   <div class="column">
    <img src="images/admin.jpg" >
   </div>
   <div class="column">
	<img src="images/student.jpg" >
   </div>
   <div class="column">
	<img src="images/faculty.jpg" >
   </div>
</div> 
<div class="row">
   <div class="column">
     <button class="button1" onclick="parent.location='admin_login.php'" style="width:250px;">Admin Login</button>
   </div>
   <div class="column">
     <button class="button1" onclick="parent.location='student_login.php'" style="width:250px;">Student Login</button>
   </div>
   <div class="column">
     <button class="button1" onclick="parent.location='faculty_login.php'" style="width:250px;">Faculty Login</button>
   </div>
</div>

</body>
</html>
