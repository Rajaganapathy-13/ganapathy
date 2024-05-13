<html>
    <head>

    </head>
</html>

<img src="download.jpeg" height="200px" width="40%"
<h1>ERROR!</h1>
<?php
session_start();
include("connect.php");
$qry="SELECT `rego`, `dob`, `name`, `dept`, `tamil`, `english`, `maths`, `science`, `ss`, `total` FROM `result`";
$res=$cn->query($qry);
if(!$res)
{
    echo "not";
}
else{
     echo "<table border='1' align='center'>";
    while($row=mysqli_fetch_array($res))
    {
        
        if($_SESSION["regno"]==$row["rego"] and $_SESSION["dob"]==$row["dob"])
        {
       header("location:page.php");
    }
}
}
?>
</body>
</html>