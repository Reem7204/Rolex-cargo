<?php

$con=mysqli_connect('localhost','root','','r1'); // Using database connection file here


 

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from cargotype where cargo_id = '$id'"); // delete query

if($del)
{
    echo "<script>alert(' A record is deleted');window.location='viewcargotype.php'</script>";	
}




?>