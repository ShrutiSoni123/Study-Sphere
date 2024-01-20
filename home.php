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
  <!--Feedback Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
  /* Testimonial Carousel */
    .owl-page {
    margin: 18px 5px; /* Adjust the margin as needed */
  }
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
          <a href="#service">Service<span></span><span></span><span></span><span></span></a>
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
  </header>
  <section class="video-container">
    <video id="video-bg" autoplay loop muted>
      <source src="assest/images/nvideo.mp4" type="video/mp4">
    </video>
    <!--================= Header Part Close ===============-->

    <!--================= Services Part Start ===============-->
    <div class="service-content"><br>
      <h1 class="heading" id="service">Service </h1><br><img src="assest/images/title_img.png" height="1%" width="30%">
      <div class="container">
        <div class="row" style="padding-top: 1px;">
          <div class="col-md-4 Services-tab item">
            <div class="folded-corner service_tab_1">
              <div class="text">
                <i class="fa fa-file-text fa-3x fa-icon-image"></i>
                <p class="item-title">
                <h3>Syllabus</h3><br>
                </p>
                <p>
                  A syllabus is a document that outlines all the essential information about a college course, The
                  syllabus serves as a foundational document in educational institutions, providing guidance, clarity,
                  and structure for both educators and learners.
                </p><br>
                <button class="btn" onclick="window.location.href = 'Syllabus.php';">Next</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 Services-tab item">
            <div class="folded-corner service_tab_1">
              <div class="text">
                <i class="fa fa-book fa-3x fa-icon-image"></i>
                <p class="item-title">
                <h3>Notes</h3><br>
                </p>
                <p>
                  Notes are meant to capture the essence of a topic, including important facts, formulas, and key
                  points. They serve as a quick reference guide during revision, enabling efficient recall and
                  reinforcement of knowledge.
                </p><br>
                <button class="btn"  onclick="window.location.href = 'notes.php';">Next</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 Services-tab item">
            <div class="folded-corner service_tab_1">
              <div class="text">
                <i class="fa fa-leanpub fa-3x fa-icon-image"></i>
                <p class="item-title">
                <h3>Question Paper's</h3>
                </p><br>
                <p>
                  Previous year's question papers can help students to understand the exam pattern, the type of
                  questions asked, and the marking scheme and Sometimes, questions are repeated in a shuffled manner
                  which can help a student.
                </p><br>
                <button class="btn" onclick="window.location.href = 'Question.php';">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================= Services Part Close ===============-->
    
    <div id="wrapper">
      <section class="content">
        <h1 class="typing">Notes Gallery</h1>
      </section>
    </div>
    <!--================= Testimonial Part Start ===============-->
    <br>
    <div class="feedback-content">
      <h1 class="heading-feedback" id="service">Testimonial</h1><br><img src="assest/images/title_img.png" height="1%" width="30%">
    </div>
    <center>
      <div class="demo">
        <div class="container">
          <div class="column">
            <div class="col-md-8">
              <div id="testimonial-slider" class="owl-carousel" style="width: 70vw; padding-left:110%;">
                <div class="testimonial">
                  <div class="pic">
                    <img src="assest/images/img1.jpg">
                  </div>
                  <h3 class="title">Williamson</h3>
                  <span class="post">Web Developer</span>
                  <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa
                    dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis
                    placeat sit vitae, consectetur adipisicing elit ipsam.
                  </p>
                </div>
                <div class="testimonial">
                  <div class="pic">
                    <img src="assest/images/img2.jpg">
                  </div>
                  <h3 class="title">Kristina</h3>
                  <span class="post">Web Designer</span>
                  <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa
                    dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis
                    placeat sit vitae, consectetur adipisicing elit ipsam.
                  </p>
                </div>
                <div class="testimonial">
                  <div class="pic">
                    <img src="assest/images/img3.jpg">
                  </div>
                  <h3 class="title">Kristina</h3>
                  <span class="post">Web Designer</span>
                  <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa
                    dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis
                    placeat sit vitae, consectetur adipisicing elit ipsam.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>

    <!-- Testimonial Script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
          items: 1,
          itemsDesktop: [1000, 1],
          itemsDesktopSmall: [979, 1],
          itemsTablet: [768, 1],
          pagination: true,
          transitionStyle: "backSlide",
          autoPlay: true
        });
      });
    </script>
    <!--================= Testimonial Part Close ===============-->
    <!--================= Footer Part Close ===============-->
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Quick Links</h3>
        <p class="footer-links">
          <a href="home.php" class="link-1">Home</a>
          <a href="#service">Services</a>
          <a href="aboutus.php">About Us</a>
          <a href="feedback.php">Give Feedback</a>
          <a href="#contact" id="contact">Contact </a>
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
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
          vehicula sit amet.
        </p>

        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook" id="fb"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div><br>
      </div>
    </footer>
    <!--Footer Script-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--================= Footer Part Close ===============-->
  </section>
  </div>

  <!---Navbar Hover Script-->
  <script>
    let hamMenuIcon = document.getElementById("ham-menu");
    let navBar = document.getElementById("nav-bar");
    let navLinks = navBar.querySelectorAll("li");

    hamMenuIcon.addEventListener("click", () => {
      navBar.classList.toggle("active");
      hamMenuIcon.classList.toggle("fa-times");
    });
    navLinks.forEach((navLinks) => {
      navLinks.addEventListener("click", () => {
        navBar.classList.remove("active");
        hamMenuIcon.classList.toggle("fa-times");
      });
    });
  </script>
</body>
</html>