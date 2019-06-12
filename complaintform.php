<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta HTTP-EQUIV="Pragma" content="no-cache">
<meta HTTP-EQUIV="Expires" content="-1" >
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="stylesheet" href="styles.css">

<link rel="icon" type="image/ico" href="logo.jpg" />
<style>

body 
{

 font-family: Arial, Helvetica, sans-serif;
 margin: 0 5px 10 5px;
 height: 1000px;
   background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url(formbackground.jpg);
}
.container {
	
	width: 50%;
  border-radius: 50px;
  background-color: #B22222;
  padding: 30px;
}
input[type=text], select 
{
  width: 20%;
  padding: 8px;
  border: 2px solid ;
  border-radius: 4px;
  resize: vertical;

}
input[type=text] ,textarea{
	border: 2px solid #ccc ;
  border-radius: 4px;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: white;
}
.col-25 {
  float: left;
  width: 50%
  margin-top: 14px;
  font:Helvetica;
  font-size:30px;
}

.col-75 {
  float: left;
  width: 60%;
  margin-top: 14px;
  font:sans-serif;
  font-size:30px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/* The container */
.contain {
  display: block;
  /*float: left;
  width:50%;*/
 padding-left: 5px;

  position: relative;
  cursor: pointer;
  font-size: 25px;
  
}
textarea{
   width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  font-size:25px;
  border-radius:40px;
  box-sizing: border-box;
}

/* Hide the browser's default radio button */
.contain input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 10px;
  left: 100px;
  height: 15px;
  width: 15px;
  border: 1px solid blue;
  background-color: #fff;
  
  border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 5px;
	left: 5px;
	width: 4px;
	height: 4px;
	border-radius: 50%;
	background: gray;
}

.button1
{

  background-color:#82cadf;
  
  color: white ;
  padding: 15px 15px;
  text-align: center;
  font-size: 30px;
  cursor: pointer;
  bottom: 0;
  border-radius: 4px;
}
button1:hover 
{
  opacity: 0.8;
}
</style>
<script language="javascript">

function validate()
{

if(f2.roomno.value==" "){
alert("Please enter the room no");
return false;
}

else if(f2.message.value=="Describe your complaint here"){
alert("Please describe the complaint");
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
     <a>Mr.S.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul>
<h1 align="center" style="color:white;">Complaint Form</h1>
<br>
<center>
<div class="container" align="center">
<form name="f2"  action="complaintform2.php" onsubmit="return validate()"  method="POST">
<div class="row">
<div class="col-25">
<label> Department:</label>
</div>
<div class="col-75">
   <select name="dept" id="dept" style="width:150px;height:35px" required>
    <option value="">Choose-</option>
    <option value="cse">CSE</option>
    <option value="ece">ECE</option>
    <option value="eee">EEE</option>
    <option value="chem">CHEM</option>
    <option value="it">IT</option>
	<option value="mech">MECH</option>
	<option value="civil">CIVIL</option>
  </select>
 </div> 
</div>

<div class="row">
<div class="col-25">
<label>Room no:</label>
</div>
<div class="col-75">
  <input type="text" id="roomno" name="roomno" value=" " class="form-control" required>
</div> 
</div>

<div class="row">
<div class="col-25">  
<label>Complaint Type:</label>
</div>
<div class="col-75">


<label class="contain">Carpentary
  <input type="radio" id="complaint" name="complaint" value="carpentery"> 
   <span class="checkmark"></span>
</label>
<label class="contain">Plumbing
  <input type="radio" id="complaint" name="complaint" value="plumbing">
  <span class="checkmark"></span>
  </label>
<label class="contain">Electrical
  <input type="radio" id="complaint" name="complaint" value="electrical">
<span class="checkmark"></span>  
  </label>
<label class="contain">Systems
  <input type="radio" id="complaint" name="complaint" value="systems">
<span class="checkmark"></span>  
  </label>
<label class="contain">Miscellaneous
<input type="radio" id="complaint" name="complaint" value="miscellaneous" required>
<span class="checkmark"></span>
</label>

</div> 
</div>
<br>

<div class="row">
<div class="col-25">
  <label>Complaint Description:</label>
  </div>
<div class="col-75">
  <textarea id="message" name="message" rows="6" cols="50" class="form-control"  required>Describe your complaint here
  </textarea>
</div> 
</div>
<br><br>
  <input  class="button1" type="submit" value="Submit" name="mj-submit">

<p>Click submit to register your complaint</p>

</form>
</div>
</center>
</body>
</html>