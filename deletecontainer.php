<?php

$con=mysqli_connect('localhost','root','','r1'); // Using database connection file here


 

$id = $_GET['co_id']; // get id through query string

$del = mysqli_query($con,"delete from container where co_id = '$id'"); // delete query

if($del)
{
    echo "<script>alert(' A record is deleted');window.location='viewcontainer.php'</script>";	
}




?>