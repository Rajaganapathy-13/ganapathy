<html>
<head>
    <title></title>
    <script>
        function show()
        {
            window.print();
        }
        </script>
        <Style>
            #php
            {
                position:absolute;
                top:140px;
                left:20%;
                width:70%;
            }
            #img
            {
                position:absolute;
                top:-10px;
                left:10%;
            }
            #btn
            {
                    position:fixed;
                    top:600px;
                    right:70px;
                    
            }
input[type="submit"]{
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
}
.back{
    position:fixed;
    top:600px;
    left:70px;
}
        </Style>
        
</head>
<form name="form" method="post">
<body><div id="img">
    <center><img src="Untitled-4 copy.jpg" height="220px" width="300%"></center></div>
    <div id="btn"><table border="0">
        <div class="back">
        <input type="submit" name="btnback" value="back">
<?php
session_start();
if(isset($_POST["btnback"])){
    header("location:home.php");
}?>
        <tr><td>
            <input type="submit" name="btnsubmit" value="print" onclick="show()">
    </td></tr>
    </table></div>

    <div id="php">
<?php
include("connect.php");
$qry="SELECT `rego`, `dob`, `name`, `dept`, `tamil`,`tg`,`english`,`eg`,`maths`,`mg`, `science`,`sg`,`ss`,`ssg`,`total`,`per` FROM `result`";
$res=$cn->query($qry);
if(!$res)
{
    echo "not";
}
else{
     echo "<table border='1' align='center' width='50%' height='400px'><tr><td style='color:black;text-align:center;font-size:25px;font-weight:bold;'>Subject</td><td style='text-align:center;font-size:25px;font-weight:bold;'>Marks</td></tr>";
    while($row=mysqli_fetch_array($res))
    {
        
        if($_SESSION["regno"]==$row["rego"] and $_SESSION["dob"]==$row["dob"])
        {
        echo "<center><h1>Register number:".$row["rego"]."</tr></td></br>";
        echo "Name:".$row["name"]."</style></td></tr></br>";
        echo "Department:".$row["dept"]."</td></tr></h1></center>";
        echo "<tr><td width=25% style='color:red;text-align:center;font-size:25px;font-weight:bold;'>Tamil</td><td style='text-align:center;font-size:25px;font-weight:bold;'>".$row["tamil"]."</td><td>".$row["tg"]."</tr>";
        echo "<tr><td style='color:red;text-align:center;font-size:25px;font-weight:bold;'>English</td><td style='text-align:center;font-size:25px;font-weight:bold;'>".$row["english"]."</td><td>".$row["eg"]."</tr>";
        echo "<tr><td style='color:red;text-align:center;font-size:25px;font-weight:bold;'>Maths</td><td style='text-align:center;font-size:25px;font-weight:bold;'>".$row["maths"]."</td><td>".$row["mg"]."</tr>";
        echo "<tr><td style='color:red;text-align:center;font-size:25px;font-weight:bold;'>Scinece</td><td style='text-align:center;font-size:25px;font-weight:bold;'>".$row["science"]."</td><td>".$row["sg"]."</tr>";
        echo "<tr><td style='color:red;text-align:center;font-size:25px;font-weight:bold;'>SS</td><td style='text-align:center;font-size:25px;font-weight:bold;'>".$row["ss"]."</td><td>".$row["ssg"]."</tr>";
        echo "<tr><td style='color:green;text-align:center;font-size:25px;font-weight:bold;'>Total</td><td style='text-align:center;font-size:25px;font-weight:bold;color:green'>".$row["total"]."</td><td>".$row["per"]."</tr>";
            
    }
}
}
?>
</div>
</form>