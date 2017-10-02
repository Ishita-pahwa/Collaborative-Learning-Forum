<html>
<?php include 'abc.php' ;?>
<div id="header">MY FORUM
<a href="create1.php?id"> <div style="text-align:right" class="top">Home</a></div>
<input type="button" value="HOME" >
</div>
<div id="menu">  
        <a href="create1.php?id">Home</a> -  
        </div>
          
        <div id="userbar">Hello Example. Not you? Log out.</div>  
     
        <div id="content">
</div>

<div id="left-col">left column</div>
<div id="right-col">right column<br/>link</div>
<div id="centre-col">centre column</div>
<div id="clear"></div>
<div id="footer">footer</div>

<style>
#header {
border:solid thin gray;
background-image: url('background pic.jpg');
text-align:center;
font-size:x-large;
font-weight:bold;
margin:250px;
height: 50px;
  padding: 30;
  width: 50%;
   
 
}
#menu a:hover {  
    background-color: #009FC1;  
}  
  
#userbar {  
    background-color: #fff;  
    float: rightright;  
    width: 250px;  
}  
  

#left-col {
border:solid thin gray;
margin:5px;
width=150px;
float:left;
}

#right-col {
border:solid thin gray;
margin:5px;
width=150px;
float:right;
}

#centre-col {
border:solid thin gray;
margin:10px 160px 5px 160px;
min-height:400px;
}

#footer {
text-align=center;
border-top:dashed thin gray;
margin:5px;
font-style:italic;
}
#userbar {  
    background-color: #fff;  
    float: rightright;  
    width: 250px;  
}

#clear {
clear:both;
}

</style>
</html>