<?php

$con=mysqli_connect('localhost','root','','r1'); // Using database connection file here


 

$id = $_GET['track_id']; // get id through query string

$sql = mysqli_query($con,"UPDATE `tracking` SET `status`='Rejected' WHERE `track_id`='$id'"); // delete query

if($sql)
{
    echo "<script>alert('Request Rejected');window.location='viewrequest.php'</script>";	
}




?>