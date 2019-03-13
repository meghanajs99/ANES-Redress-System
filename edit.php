<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg"/>
<link rel="stylesheet" href="styles.css">
<style>
input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
div {
  border-radius: 30px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 40%;
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
<li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="inp" type="submit" name="Logout" value="logout">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.Joshua Johnson</a><a>Cse Dept</a><a>jj@anits.edu.in</a><a>9984672345</a>
    </div>
</li>
</ul>
<br><br><br>
<center>
<div>
<form action="save.php" method="POST">
<label for="cid"><b>Complaint Id:</b></label>
		       <!--<input type="text" id="cid" name="cid" placeholder="Enter Complaint id" required><br><br>-->
			   <?php
			   session_start();
			   $_SESSION['cid']=$_POST['id'];
			   $_SESSION['type']=$_POST['type'];
			   echo $_POST['id'];
			   ?>
<label for="status"><b>Status:</b></label>
 		<input type="radio" id="status" name="status" value="Complaint Registered"> Complaint Registered
				<input type="radio" id="status" name="status" value="Still Progress"> Still Progress
				<input type="radio" id="status" name="status" value="Solved"> Solved <br><br><br>
				<input name="save" class="buttonSave" type="submit" id="save" value="save changes">
				<input name="cancel" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/first.php')" value="Cancel" 
				id="cancel" >
				
</form>
</div>
</center>
</body>
</html>