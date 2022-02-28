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
                <a href=" shippmententry.php" class="dropdown-item">Shippment Entry</a>
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
    
    <form method="post">
    
    <h2>    Details of track id </h2>
    <fieldset> <legend> Package details</legend>
    <?php
        $con = mysqli_connect("localhost","root","","r1");
        $id = $_GET['track_id'];
        
        $sql1 = "SELECT * FROM booking where track_id = $id";
        $result = mysqli_query($con,$sql1);
        while($row = mysqli_fetch_array($result)) {
            ?>
    
    <table>
        <tr><th>Track id : </th><th><?php echo $row["track_id"]; ?></th></tr>
        <tr><th> Cargo Type : </th><th><?php echo $row['cargo_id']; ?></th></tr>
        <tr><th>Weight : </th><th><?php echo $row["weight"]; ?></th></tr>
        <tr><th>Volume : </th><th><?php echo $row["volume"]; ?></th></tr>
        <tr><th>No. of carton : </th><th><?php echo $row["noofcarton"]; ?></th></tr>
        <tr><th>Date of booking : </th><th><?php echo $row['date']; ?></th></tr>
        </table>
        </fieldset>
        <fieldset>
            <legend>Sender details</legend>
            <table>
        <?php
        $s_id = $row["sender_id"];
        $sql2 = "SELECT * FROM `customers` WHERE `cust_id`='$s_id'";
        $result2 = mysqli_query($con,$sql2);
        while($row2 = mysqli_fetch_array($result2)){ ?>
        <tr><th>Name : </th><th><?php echo $row2['name']; ?></th></tr>
        <tr><th>Address : </th><th><?php echo $row2['address']; ?></th></tr>
        <tr><th>Phone number : </th><th><?php echo $row2['phone_no']; ?></th></tr>
        <tr><th>Emailid : </th><th><?php echo $row2['emailid']; ?></th></tr>
        <?php }
        ?>
        </table>
        </fieldset>
        <fieldset>
            <legend>Receiver details</legend>
            <table>
        <tr><th>Name : </th><th><?php echo $row['r_name']; ?></th></tr>
        <tr><th>Phone number : </th><th><?php echo $row['r_phoneno']; ?></th></tr>
        <tr><th>Emailid : </th><th><?php echo $row['r_emailid']; ?></th></tr>
        </table>
        </fieldset>

        <fieldset>
            <legend>Departure</legend>
            <table>
        <tr><th>Country : </th><th><?php echo $row["r_country"]; ?></th></tr>
        <tr><th>State : </th><th><?php echo $row["r_state"]; ?></th></tr>
        <tr><th>District : </th><th><?php echo $row["r_district"]; ?></th></tr>
        <tr><th>City : </th><th><?php echo $row["r_city"]; ?></th></tr>
        <tr><th>Zipcode : </th><th><?php echo $row["r_pincode"]; ?></th></tr>
        </table>
        </fieldset>

        <fieldset>
            <legend>Arrival</legend>
            <table>
            <tr><th>Country : </th><th><?php echo $row["p_country"]; ?></th></tr>
        <tr><th>State : </th><th><?php echo $row["p_state"]; ?></th></tr>
        <tr><th>District : </th><th><?php echo $row["p_district"]; ?></th></tr>
        <tr><th>City : </th><th><?php echo $row["p_city"]; ?></th></tr>
        <tr><th>Zipcode : </th><th><?php echo $row["p_pincode"]; ?></th></tr>
        </table>
        </fieldset>


            <fieldset>
                <legend>Total Amount</legend>
                
        <?php echo $row["totalcost"]; ?> 
        </fieldset>
    <?php
        }
        ?>
    </fieldset>
    <a href="bookaservice.php">Go back </a>
    </form>
</center>


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