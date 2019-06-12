<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg">
<link rel="stylesheet" href="styletable.css">
</head>
<body>
<ul>
   <li><a href="first.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="navinput" type="submit" name="Logout" value="logout">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.S.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul><br><br>
<?php
session_start();
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
   $status=$_POST['status'];
   $complaintId=$_SESSION['cid'];
   $type=$_SESSION['type'];
    //$complaintId= stripslashes($_REQUEST['$cid']);
    $complaintId = mysqli_real_escape_string($con,$complaintId); 
    
	$status= stripslashes($_REQUEST['status']);
    $status = mysqli_real_escape_string($con,$status);
        
	$query = "UPDATE complaints SET status='$status' WHERE Id='$complaintId'";
    $result = mysqli_query($con,$query);
  
  $sql="SELECT * from complaints where id='$complaintId'";
  $result=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  echo "<table><tr><th>ID</th><th>Department</th><th>Room No.</th><th>Type</th><th>Description</th><th>Status</th></tr>" ;
  echo "<tr>";  
        echo "<td> " . $row["id"]. "</td>";
		echo "<td> " . $row["department"]. "</td>";
		echo "<td> " . $row["roomno"]. "</td>";
		echo "<td> " . $row["type"]. "</td>";
		echo "<td> " . $row["description"]. "</td>";
		echo "<td> " . $row["status"]. "</td>";
    echo "</tr>";
    echo "</table>";
?><br><br>
<div align="center">
<input name="Done" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/first.php')" value="Done" 
				id="Done" >
<input name="change" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/secondprocess.php')" value="change" 
				id="change" ></div>
</body>
</html>