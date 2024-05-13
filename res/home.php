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
                REGNO
                <input type="text" name="txtreg" placeholder="REGISTER NUMBER" id="regno">
                <span
                id="regerror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                D.O.B
                <input type="text" name="txtdob" placeholder="13/12/1999" id="dob">
                <span
                id="doberror"
                class="error-message">
                </span>
            </td>
        </tr>
        <tr>
            <td><center>
                <input type="submit" name="submit" value="view result"></center>
            </td>
        </tr>
    </table>
   
    <?php
session_start();

if(isset($_POST["submit"]))
{
    $_SESSION["regno"]=$_POST["txtreg"];
$_SESSION["dob"]=$_POST["txtdob"];
    header("location:qry.php");
}

?>
</form>

<script src="res.js"></script>

</body>    
</html>


