<?php

$conn = mysqli_connect("localhost","root", "", "sampledb");

$pid=$_GET['PID'];
$pname=$_GET['PName'];
$price=$_GET['Price'];

$query = "update product set PName='".$pname."', Price=".$price." where ProductID=".$pid."";

if(mysqli_query($conn, $query))
{
     echo "success";
}
else
{
     echo "failed";
}

mysqli_close($conn);

?>