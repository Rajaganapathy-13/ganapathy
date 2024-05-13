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
</style>
    </head><div id="back">
    <a href="main.php">back</a>
</div>
    <body>
    <form name="gana" method="post" onsubmit="return validateform()">
    <table border="0" align="center"><tr>
            <td>
                Admin Name
                <input type="text" name="txtname" placeholder="USER NAME" id="regno">
                <span
                id="regerror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                PassWord
                <input type="text" name="txtpw" placeholder="PASSWORD" id="dob">
                <span
                id="doberror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td><center>
                <input type="submit" name="submit" value="CLICK!"></center>
            </td>
        </tr>
    </table>
   
    <?php

if(isset($_POST["submit"]))
{
$a=$_POST["txtname"];
$b=$_POST["txtpw"];
if(($a=="king")&&($b=="queen"))
{
    header("location:pass1.php");
}
else
{
    echo "worng password";
}
}
?>
</form>

<script></script>

</body>    
</html>


