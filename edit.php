<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg"/>
<link rel="stylesheet" href="styles.css">
<style>
  body 
{
 overflow:hidden;
 font-family: Arial, Helvetica, sans-serif;
 margin: 0 5px 10 5px;
 height: 1000px;
   background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url(formbackground.jpg);
/*background-image:url('formbackground.jpg');*/
}
input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  top: 10px;
  left: 10px;
}
div {
  border-radius: 30px;
  background-color: #B22222;
  padding: 20px;
  width: 40%;
  font-size:30px;
}
label
{
  color:#1b1e24;
  font-style: bold;
  font-size: 30px;
}
</style>
<script>
function goBack() {
  window.history.go(-1);
}
</script>
</head>
<body>
<ul>
<li><a  href="first.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="navinput" type="submit" name="Logout" value="logout">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.S.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul>
<br><br><br>
<center>
<div>
<form action="save.php" method="POST">
  <div align="left">
<b style="font-size: 30px;float: left;">Complaint Id:</b>
		       <!--<input type="text" id="cid" name="cid" placeholder="Enter Complaint id" required><br><br>-->
			   <?php
			   session_start();
			   $_SESSION['cid']=$_POST['id'];
			   $_SESSION['type']=$_POST['type'];
			   echo $_POST['id'];
			   ?></div>
<b style="font-size: 30px;">Status:</b></label>
 		    <input type="radio" id="status" name="status" value="Complaint Registered"> Complaint Registered<br>
				<input type="radio" id="status" name="status" value="Still Progress"> Still Progress<br>
				<input type="radio" id="status" name="status" value="Solved"> Complaint Solved<br><br>				
        <input name="save" class="buttonSave" type="submit" id="save" value="save changes">
				<input name="cancel" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/first.php')" value="Cancel" 
				id="cancel" ><br>
				
</form>
</div>
</center>
</body>
</html>