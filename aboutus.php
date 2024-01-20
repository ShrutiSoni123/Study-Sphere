<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
  <title>Study Sphere</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
  <!-- Navbar Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <title>Syllabus</title>
  <style>
    body {
      position: relative;
      background-color: rgb(29, 29, 29);
    }

    /* .list-group {
      position: sticky;
      top: 102px;
    }
    .aboutimg{
        border: 5px solid rgb(200, 194, 180);
        border-style: ;
        outline: 8px solid goldenrod;
        padding: 20px;
        border-width: 10px;
    } */
    .abouttext{
      color: whitesmoke;
      text-shadow: 3px 2px goldenrod; 
      font-weight: bolder;
      font-size: 50px;
      padding-left: 40px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      padding-top: 50px;
      padding-bottom: 10px;
    }

    .paraofabout{
      color: whitesmoke;
      font-size: 18px;
      margin: 45px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      letter-spacing: 2px;
    }
  </style>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body oncontextmenu="return false">
  <!--================= Header Part Start ===============-->
  <header style="overflow: hidden;">
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

    <!----============== Text Contant Start ==============-->
    <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
          <img src="assest/images/about.webp" class="w-100 h-70 aboutimg" alt="Image">
        </div>
        <div class="col-md-6 p-4 ps-md-0">
          <h5 class="mt-0 abouttext">About Study's Sphere</h5>
          <p class="paraofabout">Study's Sphere is a web-based framework particularly designed for students of SVIM College.
            It gives a straightforward approach for teachers to circulate lectures notes to the students.
            It will provide a platform where students can access the syllabus , old question papers and lectures notes easily.
            It converts the manual paperwork to a fully automated and managed online system.
            Our goal is to focuses on improving the overall experience of students by making it easier to find and access their study materials...
          </p>
        </div>
    </div><br>
    <!----============== Text Contant Close ==============-->

    <!--================= Footer Part Close ===============-->
    <div style="margin-top:2%;">
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
                  Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
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
  </header>
</body>
</html>
