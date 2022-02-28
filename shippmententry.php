<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <title>Rolex Cargo Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
fieldset {border: 2px solid #f1f1f1;
width: 50%;}

legend {
  background-color: lightgray;
  color: white;
  padding: 5px 10px;
}

select ,input[type=text], input[type=password] {
  /*width: 100%;*/
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 500px) {
  /*span.psw {
     display: block;
     float: none;
  }*/
  
  
}

.browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: #FA8072;
  width: 500px;
}

/*.browser2 {
  background: #FA8072;
  width: 600px;
}*/

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

h2{
  padding: 30px;
}

</style>
</head>

<body>
 <!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">ROLEX CARGO SERVICES</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!--<a href="index.html" class="nav-item nav-link">Dashboard</a>-->
                <a href="viewrequest.php " class="nav-item nav-link">Requests</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Add</a>
                <div class="dropdown-menu fade-up m-0">
                <a href="viewcargotype.php" class="dropdown-item">Cargo Type</a>
                <a href="viewcontainer.php" class="dropdown-item">Container</a>
                <a href="shippmententry.php" class="dropdown-item">Shippment Entry</a>
                <a href="clearancedoc.php " class="dropdown-item">Clearance Documents</a>
                <a href="uploadd_note.php " class="dropdown-item">Delivery Note</a>
                <a href="addexpense.php " class="dropdown-item">Expense</a>
                </div></div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Update</a>
                <div class="dropdown-menu fade-up m-0">
                <a href="shippingcharge.php " class="dropdown-item">Shipping Charge</a>
                
                <a href="updatetracking.php " class="dropdown-item">Update Tracking</a>
                <a href="viewp_hold.php " class="dropdown-item">Packages on hold</a>
                </div></div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mode</a>
                <div class="dropdown-menu fade-up m-0">
                <a href="airfreight.php " class="dropdown-item">Air Freight</a>
                
                <a href="shipfreight.php " class="dropdown-item">Ship Freight</a>
                </div></div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">View</a>
                <div class="dropdown-menu fade-up m-0">
                <a href="warehousepackages.php " class="dropdown-item">Warehouse packages</a>
                <a href="viewhistory.php " class="dropdown-item">History</a>
                
                </div></div>
                <a href="report.php  " class="nav-item nav-link">Report</a>
               <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
                <a href="index.html" class="nav-item nav-link">Logout</a>
            </div>
            <!--<h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+966 56 876 7817</h4>-->
        </div>
    </nav>
    <!-- Navbar End -->
<center>

    <h2>Shipping Entry</h2>
    <form method="post">
    
        
    <fieldset>
         <legend>  Package Details</legend>
    <form>
    <table>
	<tr><th>Cargo Type</th><th> <select name="ctype"style="width: 240px;">
	<option>Select</option>
    <?php
    $con = mysqli_connect("localhost","root","","r1");
    $sql = "SELECT * FROM `cargotype`";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
    ?>
	<option value=" <?php echo $row['cargo_id']; ?>"> <?php echo $row['name']; ?></option>
    <?php } ?>
	</select> </th></tr>
	
	<tr><th>Weight</th><th><input type="text" name="weight" placeholder="In kilogram" required pattern="[0-9]{1,3}"></th></tr>
	<tr><th>Volume </th><th><input type="text" name="volume" placeholder="In cubic meter" required pattern="[0-9]{1,3}"></th></tr>
	<tr><th>Number of cartoon </th><th><input type="text" name="noofcarton" required pattern="[0-9]{1,3}"></th></tr>
</table>
    </fieldset>

    <fieldset>
    <legend>  Sender Details </legend>
        <table>
        <tr><th>Name </th><th><input type="text" name="sname" required pattern="[A-Z a-z]{3,25}"></th></tr>
        <tr><th>Address</th><th><input type="text" name="saddress"></th></tr>
        <tr><th>Phone number</th><th><input type="text" name="sphno" required pattern="[6789][0-9]{9}"></th></tr>
        <tr><th>Email Id</th><th><input type="text" name="semail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></th></tr>
    </table>
    </fieldset>


	<fieldset>
    <legend>  Receiver Details </legend>
    
    <table>
	<tr><th>Name </th><th><input type="text" name="name"></th></tr>
	<tr><th>Country </th><th><select name="country1" style="width: 240px;">
	<option>Select</option>
    <?php
    
    $sql = "SELECT * FROM `country`";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
    ?>
	<option value=" <?php echo $row['id']; ?>"> <?php echo $row['country']; ?></option>
    <?php } ?>
	</select></th></tr>
    <tr><th>State </th><th><input type="text" name="state1" pattern="[A-Z a-z]{3,25}"></th></tr>
    <tr><th>District </th><th><input type="text" name="district1" pattern="[A-Z a-z]{3,25}"></th></tr>
    <tr><th>City </th><th><input type="text" name="city1" pattern="[A-Z a-z]{3,25}"></th></tr>
    <tr><th>Pincode </th><th><input type="text" name="pin1"></th></tr>
	<tr><th>Phone Number</th><th><input type="text" name="number" required pattern="[6789][0-9]{9}"></th></tr>
	<tr><th>Email Id </th><th><input type="text" name="emailid" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></th></tr>
</table>

    </fieldset>
   
    <button type="submit" name="submit" value="submit">Submit</button>
    
</center>

<?php
    if (isset($_POST['submit'])){
        
        $ctype=$_POST['ctype'];
        $weight=$_POST['weight'];
        $volume=$_POST['volume'];
        $noofcarton=$_POST['noofcarton'];
        $name=$_POST['name'];
        $country1=$_POST['country1'];
        $state1=$_POST['state1'];
        $district1=$_POST['district1'];
        $city1=$_POST['city1'];
        $pin1=$_POST['pin1'];
        $number=$_POST['number'];
        $emailid=$_POST['emailid'];
        $sname=$_POST['sname'];
        $saddress=$_POST['saddress'];
        $sphno=$_POST['sphno'];
        $semail=$_POST['semail'];
        $date=date("Y/m/d");
        
        $con = mysqli_connect("localhost","root","","r1");

        $sc = "SELECT * FROM `shippingcharge`";
        $r_sc = mysqli_query($con,$sc);
        while($sc_row = mysqli_fetch_array($r_sc)) {
            $svolume = $sc_row['volume'];
            $sweight = $sc_row['weight'];
            $sdistance = $sc_row['distance'];
            $svat = $sc_row['vat'];
            $sextra_tax = $sc_row['extra_tax'];
            $sextra_charge = $sc_row['extra_charge'];
        }

        $cost = ($volume * $svolume) + ($weight * $sweight)  + $sdistance + $sextra_charge + $sextra_tax;

        $sql = "SELECT * FROM `customers` where login_id = '$lid'";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result)) {
            $s = $row['cust_id'];
        }
      /*  echo $country1;
    $sql3 = "SELECT * FROM `country` WHERE `country` = 'Bangladesh'";
    $result3 = mysqli_query($con,$sql3);
    while($row3 = mysqli_fetch_array($result3)) {
        $latitude1 = $row3['latitude'];
        $longitude1 = $row3['longitude'];
    }
      // latitude and longitude of Two Points 
      echo $latitude1;
      echo $longitude1;
      
      $latitude2 = 40.7127; 
      $longitude2 = -74.0059;  
      
      //Converting to radians
      $longi1 = deg2rad($longitude1); 
      $longi2 = deg2rad($longitude2); 
      $lati1 = deg2rad($latitude1); 
      $lati2 = deg2rad($latitude2); 
              
      //Haversine Formula 
      $difflong = $longi2 - $longi1; 
      $difflat = $lati2 - $lati1; 
              
      $val = pow(sin($difflat/2),2)+cos($lati1)*cos($lati2)*pow(sin($difflong/2),2); 
              
      $res1 =3936* (2 * asin(sqrt($val))); //for miles
      $res2 =6378.8 * (2 * asin(sqrt($val))); //for kilometers
              
      //display distance in miles
      print_r('Distance:'.$res1.' '.'miles '.'OR '.$res2.' '.' kilometers'); */
    

        $sql = "INSERT INTO `customers`(`name`,`address`,`phone_no`,`emailid`) VALUES ('$sname','$saddress','$sphno','$semail')";
        $result=mysqli_query($con,$sql);

        $sql_1 ="SELECT * FROM `customers`";
        $result_1=mysqli_query($con,$sql_1);

        while($row = mysqli_fetch_array($result_1)) {
            $s = $row['cust_id'];
        }

        $sql1 = "INSERT INTO `booking`(`sender_id`, `r_name`, `r_country`, `r_state`, `r_district`, `r_city`, `r_pincode`, `r_phoneno`, `r_emailid`, `cargo_id`, `weight`, `volume`, `noofcarton`, `date`,`totalcost`) VALUES ('$s','$name','$country1','$state1','$district1','$city1','$pin1','$number','$emailid','$ctype','$weight','$volume','$noofcarton','$date','$cost')";
        $result1=mysqli_query($con,$sql1);

  
        
        if($result1)
        {
            
            $last_id = mysqli_insert_id($con);
            $_SESSION['last_id1' ] = $last_id;
            $sql2 = "INSERT INTO `tracking`(`track_id`, `date`, `status`) VALUES ('$last_id','$date','Accepted')";
            $result2=mysqli_query($con,$sql2);
            echo "<script>alert(' Entered sucessfull');window.location='shippmententry.php'</script>";
         }
    }

?>
</form>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-1">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>63rd Street, 
                        Jeddah Sanayia, Saudi Arabia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+966 56 876 7817</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>rolexcargojeddah@gmail.com</p>
                    <!--<div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4" >Services</h4>
                    <a class="btn btn-link" href="">Air Freight</a>
                    <a class="btn btn-link" href="">Sea Freight</a>
                    <a class="btn btn-link" href="">Road Freight</a>
                    <!--<a class="btn btn-link" href="">Logistic Solutions</a>
                    <a class="btn btn-link" href="">Industry solutions</a>-->
                </div>
                <div class="col-lg-3 col-md-6" >
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="#aboutus">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="#services">Our Services</a>
                    <!--<a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>-->
                </div>
                <!--
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            -->
            </div>
        </div>
        <!--
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">-->
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!--Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    -->
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>