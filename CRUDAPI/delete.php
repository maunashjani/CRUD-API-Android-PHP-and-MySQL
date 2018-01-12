<?php

$conn = mysqli_connect("localhost","root", "", "sampledb");

$pid=$_GET['PID'];

$query = "delete from product where ProductID=".$pid."";

if(mysqli_query($conn, $query))
{
     echo "success";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);

?>