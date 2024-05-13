<html>
    <head>
        <title>

        </title>
        <style>
             #menu
    {
        height:70px;
        width:100%;
        background: linear-gradient(to right,black,#00ffff,#ff02ff);
    }
    #menu li{
        list-style: none;
        float:right;
        background: linear-gradient(to right,#00ffff,#ff02ff);
        
    }
    #menu li a
    {
    
        padding:0px 50px;
        line-height: 70px;
        text-decoration: none;
        
    }
    #menu li a:hover{
        color:white;
        font-size:18px;
        font-weight: bold;
        background:linear-gradient(black,yellow);
        background-size: 70px;
        display: block;
    }
    #content
    {   background-color: #00ffff;
        height:650px;
        width:100%;
    }
    #footer
    {
        background-color: black;
        height:30px;
        width:100%
    }
        #b1 li{
        list-style: none;
        float:left;
        background: linear-gradient(to right,#00ffff,#ff02ff);
        
        }
        .blink {
                animation: blinker 2.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }

            @keyframes blinker {
                150% {
                    opacity: 0;
                }
            }
            </style>
    </head>
<body>
       
       <form name="gana" method="post">
        
   <div id="outerbox">
 
       <div id="innerbox">
           <div id="header"><center>
               <h1 style="font-family: cursive;font-size:60px;color:color-mix(in srgb, black 95%,#00ffff 40%);font-weight:bolder;">ABC ENGINEERING COLLEGE</h1>
               </center></div>
<div id="menu">
    <li><a href="entry.php">To Upload result</a></li>
<li><a href="sem.php">To upload news</a></li>
               <li><a href="statusentry.php">To upload monthly status</a></li>
               <li><a href="arrear.php">Arrear exam Details</a></li>
               <div id="b1"><li><a href="main.php">Back</a></li></div>

</div>

<div id="content">
<marquee class="blink"><h1>ABC ENGINEERING COLLEGE</h1></marquee><!-----------scrolls from left to right----->
<marquee direction="right"><h1>WELCOME ADMIN</h1></marquee>
<marquee direction="down" scrollamount="1"><img src="images (1).jpeg" width="200px" height="200px"></marquee></br>
</div>
<div id="footer">
<marquee direction="right"><text style="color:white;">&copy designed by Raja</text></marquee>

</div></div>