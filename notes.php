<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
  <title>Study Sphere</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <title>Notes</title>
  <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
  <!-- Navbar Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!--Font Awesome Icons Link-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="notes.css" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
  </style>
</head>

<body>
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

  <div class="main-body" style="padding-top:5.2%;">
    <div class="image">
      <h1>MCA Study Material</h1>
      <p>Please select your semester</p>
    </div>
    <div class="container"  style="padding-bottom:3.2%;">
      <div class="row justify-content-between">
        <div class="col-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <!-- Front side of the card -->
              <div class="flip-card-front">
                <h2>Semester 1</h2>
              </div>
              <!-- Backside of the card -->
              <div class="flip-card-back" id="idforcolor">
                <a href="clanguage.php">C Language</a><br><br>
                <a href="maths.php">Maths</a><br><br>
                <a href="os.php">Operating System</a><br><br>
                <a href="it.php">Information Technology</a><br><br>
                <a href="cs.php">Communication Skills</a>
              </div>
              <div>
              </div>
            </div>
          </div>
        </div><!--Coloumn 1 ends here-->
        <div class="col-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <!-- Front side of the card -->
              <div class="flip-card-front">
                <h2>Semester 2</h2>
              </div>
              <!-- Backside of the card -->
              <div class="flip-card-back" id="idforcolor">
                <a href="dbms.php">DBMS</a><br><br>
                <a href="cn.php">Computer Network</a><br><br>
                <a href="algo.php">Algorithm Design</a><br><br>
                <a href="se.php">Software Engineering</a><br><br>
                <a href="java.php">Java</a>
              </div>
              <div>
              </div>
            </div>
          </div>
        </div><!--Coloumn 2 ends here-->
        <div class="col-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <!-- Front side of the card -->
              <div class="flip-card-front">
                <h2>Semester 3</h2>
              </div>
              <!-- Backside of the card -->
              <div class="flip-card-back" id="idforcolor">
                <a href="datamining.php">Data Mining</a><br><br>
                <a href="ai.php">Artificial Intelligence</a><br><br>
                <a href="elective1.php">Elective-I</a><br><br>
                <a href="elective2.php">Elective-II</a><br><br>
                <a href="elective3.php">Elective-III</a>
              </div>
              <div>
              </div>
            </div>
          </div>
        </div><!--Coloum 3 ends here-->
        <div class="col-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <!-- Front side of the card -->
              <div class="flip-card-front">
                <h2>Semester 4</h2>
              </div>
              <!-- Backside of the card -->
              <div class="flip-card-back" id="idforcolor">
                <br><br><a href="elective4.php">Elective-IV</a><br><br>
                <a href="elective5.php">Elective-V</a><br><br>
                <a href="elective6.php">Elective-VI</a><br><br>
              </div>
              <div>
              </div>
            </div>
          </div>
        </div><!--Coloumn 4 ends here-->
      </div><!--Row 1 ends here-->    
    </div><!--container end-->
  </div> <!--Main Div Element-->
  <div style=" margin-top:2%; padding:0px;">
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Quick Links</h3>
            <p class="footer-links">
                <a href="home.php" class="link-1">Home</a>
                <a href="home.php#service">Services</a>
                <a href="aboutus.php">About Us</a>
                <a href="feedback.php">Give Feedback</a>
                <a href="#" id="contact">Contact</a>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</div>
</header>
</body>

</html>