function validate()
{
var num1=/^anil[0-9]*$/;
var un1=/^[a-zA-Z0-9]*$/;
 if(f2.uid.value=="")
 {
alert("User ID Field Must Not Be Empty");
return false;
}
else if(!(f2.uid.value.match(num1)))
{
alert("Invalid User ID");
return false;
}
else if(f2.psw1.value=="")
{
alert("Password Field Must Not Be Empty");
return false;
}
else if(!(f2.psw1.value.match(un1)))
{
alert("Password Must Be Alphabets and Numbers");
return false;
} 
}