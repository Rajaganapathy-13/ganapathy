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
</head><div id="back">
    <a href="pass1.php">back</a>
</div>
<body>
    <form name="frm" method="post">
        <table border="1" align="center">
            <tr><th>subject</th><th>date</th><th>subcode</th><th>Enter subcode</th>
</tr>
                
            <tr>
                <td>tamil</td>
               <td> <input type="text" name="datet"></td>
               <td>subcode</td>
               <td> <input type="text" name="sc1"></td>

            </tr>
            <tr>
                <td>English</td>
                <td><input type="text" name="datee"></td>
                <td>subcode</td>
               <td> <input type="text" name="sc2"></td>

            </tr>
            <tr>
                <td>Maths</td>
                <td><input type="text" name="datem"></td>
                <td>subcode</td>
               <td> <input type="text" name="sc3"></td>

            </tr>
            <tr>
                <td>Science</td>
                <td><input type="text" name="dates"></td>
                <td>subcode</td>
               <td> <input type="text" name="sc4"></td>
            </tr>
            <tr>
                <td>SS</td>
                <td><input type="text" name="datess"></td>
                <td>subcode</td>
               <td> <input type="text" name="sc5"></td>
            </tr>
            <tr>
                <td colspan="1" align="center">
                    <td>Department</td>
                    <td><input type="text" name="txtdept" placeholder="DEPARTMENT"></td>
                    <td><input type="submit" name="btninsert" value="INSERT"></td>

                </td>
            </tr>
            
        </table>
<?php
if(isset($_POST["btninsert"]))
{
    include("connect.php");
    $qry="INSERT INTO `timetable`(`datet`, `sc1`, `date2`, `sc2`, `date3`, `sc3`, `date4`, `sc4`, `date5`, `sc5`, 
    `dept`) VALUES ('".$_POST["datet"]."','".$_POST["sc1"]."','".$_POST["datee"]."'
    ,'".$_POST["sc2"]."','".$_POST["datem"]."','".$_POST["sc3"]."','".$_POST["dates"]."','".$_POST["sc4"]."',
    '".$_POST["datess"]."','".$_POST["sc5"]."','".$_POST["txtdept"]."')";
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