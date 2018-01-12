<?php

$conn = mysqli_connect("localhost","root", "", "sampledb");

$pname=$_GET['PName'];
$price=$_GET['Price'];

$query = "insert into product (PName, Price) values ('".$pname."',".$price.")";

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