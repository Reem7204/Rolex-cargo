
<?php

$con=mysqli_connect('localhost','root','','r1'); // Using database connection file here


 

$id = $_GET['track_id']; // get id through query string

$sql = mysqli_query($con,"UPDATE `tracking` SET `status`='Accepted' WHERE `track_id`='$id'"); // delete query


if($sql)
{ 
    echo "<script>alert('Request accepted');window.location='viewrequest.php'</script>";	
}




?>