<!DOCTYPE>
<html>
<?php
session_start();
?>
<head>
<style>
h1
{
background-color:#F2CAF5;
text-align:center; 
color:#6D11ED;
border-color:#A4168D;
padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
border-style:inset;
border-width: 20px;
}

a
{
color:red;
}

divn
{
border-color:black;
border-width: 5px;
padding-top:25px;
padding-bottom:25px;
padding-right:10px;
padding-left:10px;
border-style:inset;
background-color:pink;
box-sizing:border-box;
width:40%;
float:left;
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
float:right;
}
p
{
color: blue;
font-family:"Times New Roman";
font-size:20px;
}

p.one
{
border-style:solid;
border-color:blue;
}
body
{
background-color :pink;
}
</style>
</head>

<body>

<h1> WELCOME TO THE STUDENT FORUM</h1>
<divn>
description!!:)


</divn>
<div>
<form name="next" action="general.php" method="post">
<?php
include 'connect.php';
$con = mysql_connect('localhost','root','');
 if (!$con)
 {
 echo "Failed to connect to MySQL!!    "; 
 die("CANNOT CONNECT");
 }
 
 mysql_select_db('portal') or die('No database');

if (!isset($_POST["cuname"]))
{
echo "Failed to sumbmit information!";
echo "TRY AGAIN!";


}
else
{
$username=$_POST["cuname"];

$password = $_POST["cupass"];

$result = mysql_query("SELECT * FROM users WHERE name = '$username'");

if(mysql_num_rows($result)==0) 
{ 
echo 'INVALID USERNAME.'; 
}

else if(mysql_num_rows($result)==1)
{
$match=mysql_fetch_row($result);
?><p> Username: <input type="text" name="cuname" value= "<?php echo "$match[2]";?>"> </p>
<p> Password:<input type="password" name="cupass" value="<?php echo "$match[5]";?>"></p>
<?php 
if($match[5] == $password)
   {	
   $_SESSION['username'] = $_POST['cuname'];
  
	header("Location: general.php");
   echo 'PASSWORD MATCHED!!'; ?>
<br><input type="submit" value="continue..." /> <?php
   }
   else
   {
       echo 'WRONG PASSWORD!';
//$image = "tick.jpg";  
//Echo "<img src=".$image." Style=width:30px;height:24px;>"
?>	
<a href="http://localhost/welcome.php"> <br>TRY AGAIN!</a>
<?php
   }
}
else
{
echo "wrong...";
}
}
?>
<br>
<a href="http://localhost/signin.php" >NEW USER SIGN IN HERE!</a> 
</div>
</form>
 </body>
 </html>