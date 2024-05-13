<html>
<head>
    <title></title>
    <script>
     
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
<form name="frm" method="post">
<body><div id="img">
    <center><img src="Untitled-4 copy.jpg" height="220px" width="300%"></center></div>
    <div id="btn"><table border="0">
        <div class="back">
        <input type="submit" name="btnback" value="back">
<?php
session_start();
if(isset($_POST["btnback"])){
    header("location:main.php");
}?>
        <tr><td>
            <input type="submit" name="btnsubmit" value="print" onclick="show()">
    </td></tr>
    </table></div>

    <div id="php">
<?php
include("connect.php");
$qry="SELECT `datet`, `sc1`, `date2`, `sc2`, `date3`, `sc3`, `date4`, `sc4`, `date5`, `sc5`, `dept` FROM
 `timetable`";
 $res=$cn->query($qry);
 if(!$res)
 {
    echo "error()";
 }
 else
 {  
    
    while($row=mysqli_fetch_array($res))
   { 
        echo "<tr><center>Department: </th><th>".$row["dept"]."<center></tr>";
        echo "<table border='1' align='center' width='60%'><tr><td>subject</td><td>date-Session</td><td>subcode</td></tr>";
    

        echo "<tr><td>Tamil</td><td>".$row["datet"]."</td><td>".$row["sc1"]."</td></tr>";
        echo "<tr><td>English</td><td>".$row["date2"]."</td><td>".$row["sc2"]."</td></tr>";
        echo "<tr><td>Maths</td><td>".$row["date3"]."</td><td>".$row["sc3"]."</td></tr>";
        echo "<tr><td>Science</td><td>".$row["date4"]."</td><td>".$row["sc4"]."</td></tr>";
        echo "<tr><td>Social Science</td><td>".$row["date5"]."</td><td>".$row["sc5"]."</td></tr>";
        echo "</table>";
    }}
 
?>
</div>
</form>