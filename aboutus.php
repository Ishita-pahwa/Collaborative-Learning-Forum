<html>
<?php include 't3.php' ?>
<h1><center> ABOUT US</h1>

 <div id= "crossfade">
 <img class = "cone1" src = "abz.jpg" >
<img class = "cone2" src = "abz2.jpg" >
<img class = "cone3" src = "abz3.jpg" >
<img class = "cone4" src = "abz4.jpg" >
<img class = "cone5" src = "abz5.jpg" >



     <img class = "cone" src = "s.jpg" >
     <img class = "ctwo" src = "a1.jpg" >
     <img class = "cthree" src = "a2.jpg" >
     <img class = "cfour" src = "grp3.jpg" >
     <img class = "cfive" src = "grp4.jpg" >
  </div>
  <div id="x"></div>
  <style>
  #crossfade > img { 
    width: 50%;
    height: 50%;
    position: absolute;
    top: 50%;
    
    left: 25%;
    color: transparent;
    opacity: 0;
    z-index: 0;
    -webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 30s linear infinite 0s;
    -moz-animation: imageAnimation 30s linear infinite 0s;
    -o-animation: imageAnimation 30s linear infinite 0s;
    -ms-animation: imageAnimation 30s linear infinite 0s;
    animation: imageAnimation 30s linear infinite 0s; 
}

#crossfade > img:nth-child(2)  { 
   
    -webkit-animation-delay: 6s ;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s; 
}
#crossfade > img:nth-child(3) { 
  
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s; 
}
#crossfade > img:nth-child(4) { 
   
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s; 
}
#crossfade > img:nth-child(5) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
#crossfade > img:nth-child(6) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
#crossfade > img:nth-child(7) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
#crossfade > img:nth-child(8) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
#crossfade > img:nth-child(9) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
#crossfade > img:nth-child(10) { 
    
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
@-webkit-keyframes imageAnimation { 
    0% { opacity: 0;
    -webkit-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -webkit-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}

@-moz-keyframes imageAnimation { 
    0% { opacity: 0;
    -moz-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -moz-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}

@-o-keyframes imageAnimation { 
    0% { opacity: 0;
    -o-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -o-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}

@-ms-keyframes imageAnimation { 
    0% { opacity: 0;
    -ms-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -ms-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}

@keyframes imageAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
#x
{
text-align:center;
position:500px;

}
</style>

</html>