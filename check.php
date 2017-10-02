<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "portal";
//connection to the database
$conn = mysql_connect($hostname, $username, $password) or 
            die("Unable to connect to MySQL");
//select a database to work with
$selected = mysql_select_db($database) or 
            die("no database");
//echo 'connection successful!';
echo "<br>";
global $c; 
$user=$_POST['username'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$query = mysql_query("SELECT * FROM users WHERE name ='$user'"); 
if (mysql_num_rows($query)>0) 
{ 
echo 'USERNAME ALREADY IN USE!'; 
$c=1;
mysql_query("INSERT INTO uname (fname,lname,name,age) VALUES ('$fname','$lname','$user','$age')");
}
else
{
mysql_query("INSERT INTO users (fname,lname,name,age) VALUES ('$fname','$lname','$user','$age')");
echo "user-name added!";
}
mysql_close($conn);
?>
<html>
<head>
<script>
function validate()
{
/*var x=document.forms["welc"]["c"].value;
if(x==1)
{
echo "Fill UNIQUE username!";
return false;
}
var y== document.createElement("input");
y.id = "uniqueIdentifier";
y=$_POST['username'];*/
var count=0;
var yy=document.forms["welc"]["pass"].value;
  if (yy==null || yy=="")
  {
  alert("Password must be filled out");
  return false;
  }
 for(var i=0; i<yy.length;i++)
  {
  
  if((yy[i]=='*')|| (yy[i]=='%') || (yy[i]=='&') || (yy[i]== '!') || (yy[i]=='$') || (yy[i]=='^'))
  {
  
  count=count+1;
  }
  }
  if(count==0)
  {
  alert("Weak password-enter with special character-*,%,&,!,$,^");
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
  
  var zz=document.forms["welc"]["cp"].value;
 
  if (zz==null || zz=="")
  {
  alert("Confirm Password must be filled out");
  return false;
  }
  if(yy!=zz)
  {
  alert("confirm password doesn't match");
  return false;
}
}
</script>

<style>
pp
{
color:brown;
}

body
{
background-color:#b0c4de;
}

h1
{
text-align:center; 
color:#B00694;
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
</head>

<body>


<h1>REGISTRATION </h1>
<div>
<form name="welc" action="category.php" onsubmit="return validate()" method="post">
<di><p>First Name:<input type="text" value ="<?php 
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "portal";

//connection to the database
$conn = mysql_connect($hostname, $username, $password) or 
            die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db($database) or 
            die("no database");

$userr=$_POST['username'];
if($c==1)
{

$result= mysql_query("SELECT * FROM uname WHERE name = '$userr'");
}
else
$result= mysql_query("SELECT * FROM users WHERE name = '$userr'");
$row=mysql_fetch_row($result);
echo "$row[0]"; 
?>"> 
Last Name: <input type="text" value="<?php echo "$row[1]";?>"> </p>
<p>Age: <input type="text" value="<?php echo "$row[3]";?>"> </p>
<p>Username: <input type="text" value="<?php echo "$row[2]";?>">
<?php
if($c==1)
{

$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "portal";
//connection to the database
$conn = mysql_connect($hostname, $username, $password) or 
            die("Unable to connect to MySQL");
	
 //Check connection
//if (mysql_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //}
$userrr=$_POST['username'];

mysql_query("DELETE FROM uname WHERE name='$userrr'");
mysql_close($conn);
}
?>
<pp>
</pp>
</p>
<br>
<?php
if($c==1)
{?>
<a href="signin.php">GO BACK</a>
<?php
}
else
{?>
<p> Password:<input type="password" name="pass" ></p>
<p>Confirm Password: <input type="password" name="cp"></p>
<p><input type="submit" value="Log in"></p>
<?php
}?>
</form>
</div>
</body>
</html>
