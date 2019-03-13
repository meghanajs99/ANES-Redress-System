
<html>
  <head>
    <title>Step Progress bblackar</title>
<style>
.dropdown 
{
  position: relative;
  color:;
  display: inline-block;
  font-size:20px;
}
.dropdown-content
{
  float:right;
  display: none;
  position: absolute;
  background-color: white;
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
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}

.container {
  width: 100%;
}


.progressbar {
  counter-reset: step;
}
.progressbar li {
  list-style: none;
  display: inline-block;
  width: 30.33%;
  position: relative;
  text-align: center;
  cursor: pointer;
}
.progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height : 30px;
  border: 1px solid #ddd;
  border-radius: 100%;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  background-color: #fff;
}
.progressbar li:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index : -1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.active {
  color: green;
}
.progressbar li.active:before {
  border-color: green;
} 
.progressbar li.active + li:after {
  background-color: green;
}
</style>
  </head>
  <body style="background-color:powderblue;">
<div class="dropdown">
  <span>Contact Us</span>
   <div class="dropdown-content">
    <p>Prof.XYZ</p><p>Cse Dept</p>xyz@anits.edu.in<p>9999999999</p>
   </div>
</div>
    <h1 align="center"> complaint status </h1>
    <img src="111.jpg" alt="complaint" class="center">  
<br>
<br>
    <div class="container">
      <ul class="progressbar">
        <li class="active">complaint registered</li>
        <li>complaint being solved</li>
        <li>complaint solved</li>
      </ul>
    </div>
  <html>
<body>
status : <?php echo $_POST["status"]?>
</body>
</html>
  </body>

</html>