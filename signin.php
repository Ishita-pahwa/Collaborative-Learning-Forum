
<html>
<head>

<style>
h1
{
text-align:center; 
color:#B00694;
}
body
{
background-color:#b0c4de;
}
di
{
background-color:#6495ed;
}
div
{
border-color:#A4168D;
border-width: 5px;
padding-top:25px;
padding-bottom:25px;
padding-right:10px;
padding-left:10px;
border-style:inset;
background-color:#EC67FB;
box-sizing:border-box;
width:50%;
float:center;
}

</style>
<script>
function validateForm()

/*<a href="http://localhost/welcome.php" target="myIframe">TRY AGAIN!</a>
        <iframe name='myIframe'></iframe>  

		function validateForm()
*/{
var x=document.forms["Welcome"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
  else
	{
	for(var i=0; i<x.length;i++)
	{
	if((x[i] >= 'a') && (x[i] <= 'z'))
	{
	alert("fill in capitals")
	return false;
	}
	}
	}
  
  var y=document.forms["Welcome"]["lname"].value;
  if (y==null || y=="")
  {
  alert("Last name must be filled out");
  return false;
  }
  else
	{
	for(var i=0; i<y.length;i++)
	{
	if((y[i] >= 'a') && (y[i] <= 'z'))
	{
	alert("fill in capitals")
	return false;
	}
	}
	}
  
  var z=document.forms["Welcome"]["age"].value;
  if (z==null || z=="")
  {
  alert("Age must be filled out");
  return false;
  }
  else
	{
	if(isNaN(z))
	{
	alert("Age should be in Numbers")
	return false;
	}
	if(z>130)
	{
	alert("Are you kidding me!")
	return false;
	}
	}
  
  var xx=document.forms["Welcome"]["username"].value;
  if (xx==null || xx=="")
  {
  alert("Unique user name must be filled out");
  return false;
  }
  
  
  var yy=document.forms["Welcome"]["pass"].value;
  if (yy==null || yy=="")
  {
  alert("Password must be filled out");
  return false;
  }
  
  else
  {
  var count=0;
  for(var i=0; i<yy.length;yy++)
  {
  if((yy[i]=='*')|| (yy[i]=='%') || (yy[i]=='&') || (yy[i]== '!') || (yy[i]=='$') || (yy[i]=='^'))
  {
  count ++;
  }
  }
  if(count==0)
  {
  alert("Weak password");
  return false;
  }
  else if(count==1)
  {
  alert("Medium strength password");
  }
  else
  {
  alert("Strong Password");
  }
  }
  
  var zz=document.forms["Welcome"]["cpass"].value;
  if (zz==null || zz=="")
  {
  alert("Confirm Password must be filled out");
  return false;
  }
  }

 
 


</script>
</head>

<body>

<h1>REGISTRATION </h1>
<div>
<form name="Welcome" action="check.php" onsubmit="return validateForm()" method="post">
<p>First Name: <input type= "text" name="fname">
Last Name: <input type="text" name="lname"></p>
<p>Age: <input type="text" name="age"> </p>
<p>Username: <input type="text" name="username"> </p> 
 
 <input type="submit" value="Check Availability" >


 </div>

</form>
</body>
</html>




