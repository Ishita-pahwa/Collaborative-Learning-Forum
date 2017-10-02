<!DOCTYPE html>
<html>
<head>
<body background="background pic.jpg">
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
border-color:#A4168D;
border-width: 5px;
padding-top:25px;
padding-bottom:25px;
padding-right:10px;
padding-left:10px;
border-style:inset;
background-color:light green;
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
<script>
function validate()
{
var x=document.forms["next"]["cuname"].value;
if(x=="null" || x=="")
{
alert("Enter username");
return false;
}
var y=document.forms["next"]["cupass"].value;
if(y=="null" || y=="")
{
alert("Enter Password");
return false;
}

}
/*
background-image:url('evakipler-funinthesun-pp1.jpg');
background-size:1400px 800px;
background-repeat:no-repeat;*/


</script>
</head>




<body>

<h1> WELCOME TO THE STUDENT FORUM</h1>
<divn>
description!!:)


</divn>
<div>
<form name="next" action="checking.php" onsubmit="return validate()" method="post">
<p> Username: <input type="text" name="cuname"></p>
<p> Password:<input type="password" name="cupass"></p>
<p> <input type="submit" value="LOG IN"></p>
<a href="http://localhost/signin.php" target=>NEW USER SIGN IN HERE!</a> 

</div>
</form>


</body>
</html>