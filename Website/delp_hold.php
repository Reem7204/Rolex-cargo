<?php
session_start();
$con=mysqli_connect('localhost','root','','r1'); // Using database connection file here

$id = $_GET['id']; // get id through query string
$_SESSION['t2_id']=$id;
$del = mysqli_query($con,"delete from `onhold_p` where track_id = '$id'"); // delete query

if($del)
{
    echo "<script>window.location='updatestatus2.php'</script>";	
}

?>