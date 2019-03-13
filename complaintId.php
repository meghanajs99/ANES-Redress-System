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
  margin: 10px;
  width:40%;
  border-radius: 30px;
  margin-left:35%;
  max-width: 300px;
  padding: 40px;
  background-color: #82cadf;
  
}
input[type=text] {
  width: 60%;
  background: white;
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
   <li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="input" type="submit" name="Logout" value="logout">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.Joshua Johnson</a><a>Cse Dept</a><a>jj@anits.edu.in</a><a>9984672345</a>
    </div>
</li>
</ul>
<h1 align="center">Login To See Your Complaint</h1><br>
<div class="sivaji">
  <form name="f2" action="complaint.php"  method="POST"> 
  <center>
	<label for="login id" style="font-size:20px"><b>Complaint Id:</b></label>
	<input type="text" id="cid" name="cid" placeholder="Enter ID" required><br>
	<input  class="buttonW" type="submit" name="subData" id="b1" value="Submit" onclick="validate()">
	</center>
</form>
</div>
</body>
</html>
