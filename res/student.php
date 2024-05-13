<html>
    <head>
        <title>result</title>
        <link rel="stylesheet" href="res.css" />
    <style>
               #back a
            {
             position:absolute;
             left:5%;
             bottom:450px;   
        font-size: 20px;
        text-decoration: none;
        list-style-type:none;
        background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
            }
        .php
        {
            position:absolute;
            top:250px;
            left:32%;
        }
        </style>
    </head>
    </head><div id="back">
    <a href="main.php">back</a>
</div>
    <body>
    <form name="gana" method="post" onsubmit="return validateform()">
    <table border="0" align="center"><tr>
            <td>
                REGNO
                <input type="text" name="txtregs" placeholder="REGISTER NUMBER" id="regno">
                <span
                id="regerror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                D.O.B
                <input type="text" name="txtdobs" placeholder="13/12/1999" id="dob">
                <span
                id="doberror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td><center>
                <input type="submit" name="submit" value="view status"></center>
            </td>
        </tr>
    </table>
    <div class="php">
    <?php
if(isset($_POST["submit"]))
{
    include("connect.php");
$qry="SELECT `name`, `regno`, `feesdue`, `performance`, `attendance`, `month` FROM `status` WHERE regno='".$_POST["txtregs"]."'";
$res=$cn->query($qry);
if(!$res)
{
    echo "error";
}
else{
    while($row=mysqli_fetch_array($res))
    {
        echo"</br><table border='1'  style='width:250%; border-color:pink; padding: 20px;'>
        <tr><td>Name</td><td>".$row["name"]."</td></td>
        </tr><tr><td>Regno</td><td>".$row["regno"]."</td></tr>
        <tr><td>FeesDue</td><td>".$row["feesdue"]."</td></tr>
        <tr><td>Performance</td><td>".$row["performance"]."</td></tr>
        <tr><td>Attendance</td><td>".$row["attendance"]."</td></tr>
        <tr><td>Detail for month</td><td>".$row["month"]."</td></tr>";
    }
}
}
?>
</div>
</form>

<script src="res.js"></script>

</body>    
</html>



