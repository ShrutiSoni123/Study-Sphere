<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
  <title>Study Sphere</title>
  <!-- Navbar Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!--Font Awesome Icons Link-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
  </style>
</head>
<!-- <body oncontextmenu="return false"> -->

<body>
  <!--================= Header Part Start ===============-->
  <header>
    <nav>
      <a href="#home"><img src="assest/images/clg_logo.jpg" class="clg_logo" style="mix-blend-mode:light;"></a>
      <i class="fas fa-bars" id="ham-menu" class="abc"></i>
      <ul id="nav-bar">
        <li>
          <a href="home.php">Home<span></span><span></span><span></span><span></span></a>
          </div>
        </li>
        <li>
          <a href="home.php#service">Service<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="aboutus.php">About us<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="feedback.php">Feedback<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <a href="#contact">Contact<span></span><span></span><span></span><span></span></a>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">
            <a href="#">Login<span></span><span></span><span></span><span></span></a>
            </button>
            <div class="dropdown-content">
              <a href="Signin.php">Student</a>
              <a href="facultysignin.php">Faculty</a>
            </div>
          </div>         
        </li>
      </ul>
    </nav>
    <!--================= Feedback Part Start ===============-->
    <div>
    <div class="feedback_content">
    <center><h2 id="feedback">Feedback Form </h2></center>
    </div><br>
    <p>Got Helpfull ? Please fill the form below and let us know.</p>

    <form class="form-inline" action="feedbackdata.php" method="POST" id="feedbackForm">
      <label>First Name :</label>
      <input type="text"  placeholder="Enter your first name" name="fname" required>
      <label>Last Name :</label>
      <input type="text" placeholder="Enter your last name" name="lname" required>
      <label>Choose Profile :</label>
      <input type="file" value="upload" name="profile" style="width: 23%;" id="choose" >
      <label style="margin-right:4px">Designation :</label>
      <input type="text" placeholder="Enter your designation" name="designation" required>
      <label>Message : </label>
      <textarea id="subject" name="msg" placeholder="Write something.." style="margin-left: 7px; margin-top: 1%;" required></textarea>
      <button type="submit" class="btn" id="btnn" onclick="submitForm()">Submit</button>
      <script>
        function submitForm() 
        {
             //alert("Thanks for your valuable feedback !");
             Swal.fire({
             icon: 'success',
             title: 'Thanks for your valuable feedback!',
              text: ' ',
              timer: 2000, // Adjust the delay time as needed
               allowOutsideClick: false // Prevent users from clicking outside the alert to dismiss it
           }).then(() => {
              window.location.href = 'feedback.php';
           });

          // Prevent the default form submission
          return false;
        }
        </script>
    </form>

    </div>
    <!--================= Feedback Part Close ===============-->

    <!--================= Footer Part Start ===============-->
    <div style=" margin-top:2%; margin-left:0%; width:100%;">
      <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Quick Links</h3>
          <p class="footer-links">
            <a href="home.php" class="link-1">Home</a>
            <a href="home.php#service">Services</a>
            <a href="aboutus.php">About Us</a>
            <a href="feedback.php">Give Feedback</a>
            <a href="#" id="contact">Contact </a>
          </p>
        </div>

        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker" id="location"></i>
            <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
          </div>
          <div>
            <i class="fa fa-phone" id="phone"></i>
            <p>+1.555.555.5555</p>
          </div>
          <div>
            <i class="fa fa-envelope" id="email"></i>
            <p><a href="mailto:support@company.com">support@company.com</a></p>
          </div>
        </div>

        <div class="footer-right">
          <p class="footer-company-about">
            <span>About the site</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu
            auctor lacus
            vehicula sit amet.
          </p>

          <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook" id="fb"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
          </div>
        </div>
      </footer>
    </div>
    <!--================= Footer Part Close ===============-->
    <!-- Footer Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--================= Footer Part Close ===============-->
  </header>
</body>
</html>