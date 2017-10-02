<!DOCTYPE html>
<html>
<head>
<style>
h1
{
text-align:center; 
color:red;
}
body
{
background-color:#b0c4de;
}
div
{
background-color:#6495ed;
}

</style>
<script>
function validateForm()
{
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

 <script type="text/javascript">
 
         $(document).ready(function(){
            $("#username").change(function(){
                 $("#message").html(" checking...");
             
 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"check.php",
                    data:"username="+username,
                        success:function(data){
                        if(data==0){
                            $("#message").html( "Username available");
                        }
                        else{
                            $("#message").html(" Username already taken");
                        }
                    }
                 });
 
            });
 
         });
 
       </script>
</head>

<body>
<h1>REGISTRATION </h1>
<form name="Welcome" action="check.php" method="get">
<div><p>First Name: <input type= "text" name="fname">
Last Name: <input type="text" name="lname"></p>
<p>Age: <input type="text" name="age"> </p>
<p>Username: <input type="text" name="username"> </p> 
 
 <input type="submit" id="Check_username_availability" value="Check Availability" >
<div id="username_availability_result"></div>


</form>

</body>
</html>