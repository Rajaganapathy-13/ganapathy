<?php
$cn= new mysqli("localhost","root","");
if(!$cn)
{
    echo "not connected";
}
$select=mysqli_select_db($cn,"res");
if(!$select)
{
    echo "not selected";
}
?>
