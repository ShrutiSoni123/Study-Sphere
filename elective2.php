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
  <link rel="stylesheet" href="tester.css" />
  <link rel="stylesheet" href="style.css" />

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
    </nav><br>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-4" style="width: 35%; height: 450px; border: 1px goldenrod solid; border-radius: 50px; text-align: center;">
          <h3>Machine Learning</h3><br><br>
        <div>
            <div>
                <p>Unit 1</p>
                <button>view</button><button>download</button>
            </div><br>
            <div>
                <p>Unit 2</p>
                <button>view</button><button>download</button>
            </div><br>
            <div>
                <p>Unit 3</p>
                <button>view</button><button>download</button>
            </div><br>      
            <div>
                <p>Unit 4</p>
                <button>view</button><button>download</button>
            </div><br>      
            <div>
                <p>Unit 5</p>
                <button>view</button><button>download</button>
            </div>            
        </div>
        </div><!--Coloumn 1 ends here-->
        <div class="col-4" style="width: 35%; border: 1px goldenrod solid; border-radius: 50px; text-align: center; margin-left: 10%;">
          <h3>Soft Computing</h3><br><br>
          <div>
              <div>
                  <p>Unit 1</p>
                  <button>view</button><button>download</button>
              </div><br>
              <div>
                  <p>Unit 2</p>
                  <button>view</button><button>download</button>
              </div><br>
              <div>
                  <p>Unit 3</p>
                  <button>view</button><button>download</button>
              </div><br>      
              <div>
                  <p>Unit 4</p>
                  <button>view</button><button>download</button>
              </div><br>      
              <div>
                  <p>Unit 5</p>
                  <button>view</button><button>download</button>
              </div>            
          </div>
        </div><!--Coloumn 2 ends here-->
        <div class="col-4" style="width: 35%; border: 1px goldenrod solid; border-radius: 50px; text-align: center; margin-left: 10%; ">
          <h3 >Internet of Things</h3><br><br>
          <div>
              <div>
                  <p>Unit 1</p>
                  <button>view</button><button>download</button>
              </div><br>
              <div>
                  <p>Unit 2</p>
                  <button>view</button><button>download</button>
              </div><br>
              <div>
                  <p>Unit 3</p>
                  <button>view</button><button>download</button>
              </div><br>      
              <div>
                  <p>Unit 4</p>
                  <button>view</button><button>download</button>
              </div><br>      
              <div>
                  <p>Unit 5</p>
                  <button>view</button><button>download</button>
              </div>            
          </div>
        </div><!--Coloum 3 ends here-->
      </div><!--Row 1 ends here-->  
    </div><!--container end-->
    <!----============ Footer Part Close ===============-->
    <div style=" margin-top:2%; padding:0px;">
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Quick Links</h3>
                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>
                    <a href="#">Services</a>
                    <a href="#">About Us</a>
                    <a href="#">Give Feedback</a>
                    <a href="#">Contact </a>
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
</header>
    </body>
    </html>