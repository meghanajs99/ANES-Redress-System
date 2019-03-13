<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>Complaint Management System</title>
<link rel="icon" type="image/ico" href="logo.jpg" />
<style>
body 
{
 overflow:hidden;
 font-family: Arial, Helvetica, sans-serif;
 margin: 0 5px 10 5px;
 height: 620px;
 background-image: linear-gradient(#82cadf,#fefefe);
}
input[type=text], input[type=password]
{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.button1
{
  background-color: #82cadf;
  border: none;
  color: white ;
  padding: 15px 25px;
  text-align: center;
  font-size: 20px;
  cursor: pointer
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

if(f2.message.value=="Describe your complaint here"){
alert("Please describe the complaint");
return false;
}

}
</script>
</head>
<body>

<h1 align="center">Complaint Form</h1>
<br>
<div align="center" >
<form name="f2"   action="firstprocess.php" onsubmit="return validate()"  method="POST">
 Department:
   <select name="dept" id="dept" >
    <option value="choose">Choose-</option>
    <option value="cse">CSE</option>
    <option value="ece">ECE</option>
    <option value="eee">EEE</option>
    <option value="chem">CHEM</option>
    <option value="it">IT</option>
  </select><br><br>
  Room no:
  <input type="text" id="roomno" name="roomno" value=" " class="form-control" required>
  <br><br>
Complaint Type:<br>
  <input type="radio" id="complaint" name="complaint" value="carpentry"> Carpentry<br>
  <input type="radio" id="complaint" name="complaint" value="plumbing"> Plumbing<br>
  <input type="radio" id="complaint" name="complaint" value="electrical"> Electrical<br>
  <input type="radio" id="complaint" name="complaint" value="systems"> Systems<br>
  <input type="radio" id="complaint" name="complaint" value="miscellaneous"> Miscellaneous<br>

  <br><br>
  Complaint Description:<br>
  <textarea id="message" name="message" rows="10" cols="30" class="form-control" required>Describe your complaint here</textarea>
<br><br>
  <input  class="button1" type="submit" value="Submit">

 

</form> 

<p>Click submit to register your complaint</p>
<div>
</body>
</html>