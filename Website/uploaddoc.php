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
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  /*width: 100%;*/
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: center;
  padding: 8px;
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


th {
  background-color: #04AA6D;
  color: white;
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
                <a href="shippmententry.php " class="dropdown-item">Shippment Entry</a>
                <a href="clearancedoc.php " class="dropdown-item">Clearance Documents</a>
                </div></div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Update</a>
                <div class="dropdown-menu fade-up m-0">
                <a href="shippingcharge.php " class="dropdown-item">Shipping Charge</a>
                
                <a href=" " class="dropdown-item">Update Tracking</a>
                </div></div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mode</a>
                <div class="dropdown-menu fade-up m-0">
                <a href=" " class="dropdown-item">Air Freight</a>
                
                <a href=" " class="dropdown-item">Ship Freight</a>
                </div></div>
                <a href=" " class="nav-item nav-link">Add Expense</a>
                <a href=" " class="nav-item nav-link">Report</a>
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
    <h2>Upload Documents</h2>
    <form method="post" enctype="multipart/form-data">
<table>
    <tr><td>Documents</td><td> <input type="file" name="file" value="file"></td></tr>
    <tr><td>Description</td><td><input type="text" name="d2"></td></tr>

</table>
<button name="upload" value="upload">Upload</button>
</form>
</center>
<?php

$con=mysqli_connect('localhost','root','','r1');
if(isset($_POST['upload'])){
    $id = $_GET['id'];
    $d2 = $_POST['d2'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "File/".$fileName;
       
        $query = "INSERT INTO `document` (`track_id`,`description`,`document`) VALUES ('$id','$d2','$fileName')";
        $run = mysqli_query($con,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "<script>alert('Upload sucessfull');window.location='clearancedoc.php'</script>";
        }
    }
?>

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
