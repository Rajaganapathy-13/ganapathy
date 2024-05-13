<html>
    <head>
        <title>main</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        *
        {
            margin:0px;
        }
        
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
    #outerbox
    {
        width:100%;
        height:220px;
        background: linear-gradient(to bottom,blue,black);
        background-size: cover;
    }
    #header
    {
        height:150px;
        width:70%;
        background: linear-gradient(#00ffff,#ff02ff);
        border-radius: 50px;
        margin:0px auto;
    }
    #content
    {
        
        height:500px;
        width:100%;
        background-image: url("download (2).jpeg");
        background-size:cover;
    }
    #footer
    {
        width:100%;
        height:30px;
        background: linear-gradient(red,black);
        line-height:30px;
        
    }
   
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
    #menu a
    {
        font-size: 20px;
        padding:0px 50px;
        line-height: 70px;
        text-decoration: none;
        
    }
   
    #header h1{
      text-align: center;
      line-height: 150px;

      
    }

#content{
    text-align: center;
}
#content h1{
            font-size: 32px;
             
        }
        #content h2{
            font-size: 28px; 
      line-height: 150px;

        }
        #logo
        {
            position:absolute;
            top:0px;
            left:32px;
        }
        #header h1
        {
            font-size: 60px;
            text-shadow:50px;
        color:white;
        
        }
        #content h3{
            position: absolute;
            top:250px;
        }
    </style>
    </head>
    <body>
       
        <form name="gana" method="post">
         
    <div id="outerbox">
  
        <div id="innerbox">
            <div id="header">
                <h1>ABC ENGINEERING COLLEGE</h1>
</div>
<div id="menu"><li><a href="home.php">result</a></li>
<li><a href="main.php">Professor</a></li>
                <li><a href="pass.php">admin</a></li>
                <li><a href="student.php">Student</a></li>

<a href="t.php" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
            </div>
            <div id="content">
            <div id="logo">
                <img src="download.jpeg" height="150px" width="160px">
            </div>
            
                <h2>NEWS AREA</h2>
                <p>
                  <h1>About our Institution<a href="about.php">clickhere!!</a></br>
                    Semester Exam Upadates<a href="update.php">click heree!!</a></br>
                    Arrear Exam Updates<a href="arrear.php">clickhere!!</a></br></h1>
                   <h3><marquee direction="down" height="400px">
                <img src="one copy.jpg" width="200px" height="200px"></marquee></h3>
                </p>
                
</div>
<div id="footer">
            <b><center>&copy designed by raja</center></b>
            </div>
        </div>
    </div>
            <?php
            if(isset($_POST["btnuser"]))
            {
                header("location:home.php");
            }
            if(isset($_POST["btnadmin"]))
            {
                header("location:entry.php");
            }
            ?>
        </form>
    </body>
</html>