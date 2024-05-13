<html>
    <head>
        <link rel="stylesheet" href="res.css" />
        <title></title>
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
   
</head>
<body> </head><div id="back">
    <a href="pass1.php">back</a>
</div>
    <form name="frm" method="post">
        <table border="1" align="center">


            <tr>
                <td>Name</td>
               <td> <input type="text" name="name"></td>
               
            </tr>
            <tr>
               
                <td>Reg No</td>
               <td> <input type="text" name="reg"></td>

            </tr>
            <tr>
                <td>fessdue</td>
                <td><input type="text" name="fees"></td>
                

            </tr>
            <tr>
                <td>Performance</td>
                <td><input type="text" name="performance"></td>
                
            </tr>
            <tr>
                <td>Attendance(%)</td>
                <td><input type="text" name="attendance"></td>
                
            </tr>
            <tr>
                <td>Month</td>
                <td><input type="text" name="month"></td>
                
            </tr>
            <tr>
                <td colspan="1" align="center">
                    
                    <td><input type="submit" name="btninsert" value="INSERT"></td>

                </td>
            </tr>
            
        </table>
<?php
if(isset($_POST["btninsert"]))
{
    include("connect.php");
    $qry="INSERT INTO `status`(`name`, `regno`, `feesdue`, `performance`, `attendance`, `month`) VALUES 
    ('".$_POST["name"]."','".$_POST["reg"]."','".$_POST["fees"]."','".$_POST["performance"]."','".$_POST["attendance"]."',
    '".$_POST["month"]."')";
    $res=$cn->query($qry);
    if(!$res)
    {
        echo "error";
    }
    else
    {
        echo "inserted";
    }
}
?>
    </form>
</html>