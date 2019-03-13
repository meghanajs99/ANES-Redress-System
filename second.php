<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg"/>
<style>
.button 
{
  background-color: #82cadf;
  color: black;
  text-align:center;
  font-size:30px;
  border:dashed;
  padding: 10px ;
  width: 40%;
}
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
  color: white;
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
body 
{
	overflow:hidden;
 font-family: Arial, Helvetica, sans-serif;
 margin: 0 5px 10 5px;
 height: 620px;
 background-image: linear-gradient(#82cadf,#fefefe);
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
<form  method="post">
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
  <tr id="entryTableHeader">
    <td>:: View Complaints ::</td>
  </tr>
  <tr>
    <td class="contentArea"><div class="errorMessage" align="center"></div>
        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
          <tr align="center">
            <td colspan="2">
			<input type="hidden" name="compId" value=""/>			</td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Complaint Type </td>
            <td class="content"><font color="#FF0000"><b></b></font></td>
          </tr>     
          <tr>
            <td width="200">&nbsp;</td>
            <td width="372">&nbsp;</td>
          </tr>
         <tr class="entryTable">
            <td valign="top" class="label">&nbsp;Complaint Description .</td>
            <td class="content">
			<textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"  readonly="readonly"></textarea></td>
          
	   <td><input name="btnLogin" type="button" id="btnLogin" value=" edit " onclick="parent.location='view.php'"></td>
          </tr>
	

	<tr class="entryTable">
            <td valign="top" class="label">&nbsp;Complaint Description .</td>
            <td class="content">
			<textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"  readonly="readonly"></textarea></td>
          
	   <td><input name="btnLogin" type="button" id="btnLogin" value=" edit " onclick="parent.location='view.php'"></td>
          </tr>
 
	<tr class="entryTable">
            <td valign="top" class="label">&nbsp;Complaint Description .</td>
            <td class="content">
			<textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"  readonly="readonly"></textarea></td>
          
	   <td><input name="btnLogin" type="button" id="btnLogin" value=" edit " onclick="parent.location='view.php'"></td>
          </tr>
		  </body>
</html>
  