<!doctype html>

<?php 
  session_start();
 ?>
<html lang="en">

  <head>
    <title>ATAL</title>

    <link rel="icon" type="image/png" href="images/ATAL.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">ATAL</a>
              </div>
            </div>

            <div class="col-9 text-right">
              

              <span class="d-inline-block d-lg-block"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="work.html" class="nav-link">Work</a></li>
                  <li class="active"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/Background/ATAL background 1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h1 class="mb-4 text-white">Contact Us</h1>
              <p class="mb-4">Drop us a message!</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  
   <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mb-5" >

            <form action="SendEmail.php" method="POST" id="form">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name = "firstName" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name = "lastName" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">

                  <?php 
                    // Check if an error message should be passed

                    if(is_null($_SESSION["error"]) == 0){

                      echo "<p style = \"color: red; margin-left: 1%;\">Invalid email format</p>";

                    }
                   ?>
                  
                  <input type="text" class="form-control" placeholder="Email address" name = "email" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea id="" type="text" class="form-control" placeholder="Write your message." name = "text" cols="30" rows="10" required></textarea>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>

          </div>

          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>University of West London</span>
<span><p>St Mary's Rd, Ealing, London</p></span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone: </span><span>02082312276</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email: </span><span>atalsociety15@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div> <!-- END .site-section -->
    
    

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About us</h2>
                <p>We are ATAL Society, a group passionate about computing and all technologies. Our goal is to further our knowledge in this field, while also maintaining a feel of community through multiple events and competitions organised by us, for us.</p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">

              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Connect</h2>
                <div class="social_29128 white mb-5">
                  <a href="https://www.facebook.com/atalsocietyuwl/" target="_blank"><span class="icon-facebook"></span></a>  
                  <a href="https://www.instagram.com/atalsocietyuwl/?hl=en" target="_blank"><span class="icon-instagram"></span></a>  
                  <a href="https://twitter.com/ATAL_UWL" target="_blank"><span class="icon-twitter"></span></a>  

                  <a href="https://github.com/AtalSociety" target="_blank"><span class="icon-github"></span></a>

                  
                  <a href="https://www.linkedin.com/in/atal-society-at-uwl-2936a8195/" target="_blank"><span class="icon-linkedin"></span></a>
                 </div>

              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
  <p class="w3-medium">UWLSU <a href="https://www.uwlsu.com/organisation/ATAL/" target="_blank">ATAL Society</a></p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

