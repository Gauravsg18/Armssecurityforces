<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>contact</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="https://www.google.com/maps/place/Dhoot+Hospital+Rd,+Ashok+Nagar,+MIDC+Industrial+Area,+Chilkalthana,+Aurangabad,+Maharashtra+431006/@19.8765591,75.3865804,17z/data=!3m1!4b1!4m6!3m5!1s0x3bdba31d4a2ab879:0x2e3dfa418e6f734b!8m2!3d19.8765541!4d75.3891553!16s%2Fg%2F11td341j8h?entry=ttu" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Chhatrapati sambhajinagar
              </span>
            </a>
            <a href="tel:8805945756" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +91-8805945756
              </span>
            </a>
            <a href="mailto:vaishali.pattekar@armssecurity.in" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                vaishali.pattekar@armssecurity.in
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                Armssecurityservices
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="guard.html"> Licence and business </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <div class="flex-container">
    <div class="form-section">

      <section class="contact_section layout_padding">
        <div class="contact_bg_box">
          <div class="img-box">
            <img src="images/contact-bg.jpg" alt="">
          </div>
        </div>
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Get In touch
            </h2>
          </div>
          <div class="">
            <div class="row">
              <div class="col-md-7 mx-auto">
             
  <?php if (isset($success_message)) { ?>
    <div class="alert alert-success" role="alert">
      <?php echo $success_message; ?>
    </div>
  <?php } elseif (isset($error_message)) { ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $error_message; ?>
    </div>
  <?php } ?>
                <form action="process_form.php" method="POST">
                  <div class="contact_form-container">
                    <div>
                      <input type="text" placeholder="Full Name" name="full_name" required />
                    </div>
                    <div>
                      <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div>
                      <input type="text" placeholder="Phone Number" name="phone_no" />
                    </div>
                    <div class="">
                      <input type="text" placeholder="Message" class="message_input" name="message" />
                    </div>
                    <div class="btn-box">
                      <button type="submit" name="submit">Send</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
       </section>
    </div>
    <div class="map-section">
      

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1399.1549830313872!2d75.38877422174116!3d19.879161909126328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba30004218bd5%3A0x395b336a48ce8ab0!2sArms%20security%20services%20pvt%20Ltd!5e0!3m2!1sen!2sin!4v1713514951517!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
    </div>
  </div>
 
  <!-- end contact section -->
<!-- info section -->
<section class="info_section ">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_logo">
          <a class="navbar-brand" href="index.html">
            <span>
              Armssecurity
            </span>
          </a>
          <p>
            Build the relation by trust....
          </p>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="info_info">
          <h5>
            Contact Us
          </h5>
        </div>
        <div class="info_contact">
          <a href="https://www.google.com/maps/place/Dhoot+Hospital+Rd,+Ashok+Nagar,+MIDC+Industrial+Area,+Chilkalthana,+Aurangabad,+Maharashtra+431006/@19.8765591,75.3865804,17z/data=!3m1!4b1!4m6!3m5!1s0x3bdba31d4a2ab879:0x2e3dfa418e6f734b!8m2!3d19.8765541!4d75.3891553!16s%2Fg%2F11td341j8h?entry=ttu" class="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
             chatrapti sambhajinagar,
            </span>
          </a>
          <a href="tel:8805945756" class="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Call : +91-8805945756
            </span>
          </a>
          <a href="mailto:vaishali.pattekar@armssecurity.in" class="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              vaishali.pattekar@Armssecurity.in
            </span>
          </a>
        </div>
      </div>

      <div class="col-md-3">
          <div class="social_box"> 
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="currentYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>