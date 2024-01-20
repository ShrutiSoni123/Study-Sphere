<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
    <title>Study Sphere</title>
    <!-- Navbar Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
    <!--Font Awesome Icons Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Feedback Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css"/>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
    </style>
</head>
<!-- <body oncontextmenu="return false"> -->

<body style="margin: 0px; padding: 13px; border: none;">
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
        <div id="headerspart">
            <div id="textt">
                <h1>Previous Year Question Paper's</h1>
            </div>
        </div>
        <!--=================== Cards Part Start =================-->
        <div class="row" style="padding:1.6%;">
            <div class="column" id="MCAcol">
                <div class="card">
                    <h4 class="abc">MCA 1st Sem</h4>
                    <div class="back">
                        <h5>Please Select Year</h5>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-I-2022';">Year 2022</button>
                            <button onclick="window.location.href = '#MCA-I-2021';">Year 2021</button>
                        </div>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-I-2020';">Year 2020</button>
                            <button onclick="window.location.href = '#MCA-I-2019';">Year 2019</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column" id="MCAcol">
                <div class="card">
                    <h4 class="abc">MCA 2nd Sem</h4>
                    <div class="back">
                        <h5>Please Select Year</h5>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-II-2023';">Year 2023</button>
                            <button onclick="window.location.href = '#MCA-II-2022';">Year 2022</button>
                        </div>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-II-2020';">Year 2021</button>
                            <button onclick="window.location.href = '#MCA-II-2019';">Year 2020</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column" id="MCAcol">
                <div class="card">
                    <h4 class="abc">MCA 3rd Sem</h4>
                    <div class="back">
                        <h5>Please Select Year</h5>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-III-2022';">Year 2022</button>
                            <button onclick="window.location.href = '#MCA-III-2021';">Year 2021</button>
                        </div>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-III-2020';">Year 2020</button>
                            <button onclick="window.location.href = '#MCA-III-2019';">Year 2019</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column" id="MCAcol">
                <div class="card">
                    <h4 class="abc">MCA 4th Sem</h4>
                    <div class="back">
                        <h5>Please Select Year</h5>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-IV-2022';">Year 2022</button>
                            <button onclick="window.location.href = '#MCA-IV-2021';">Year 2021</button>
                        </div>
                        <div class="button-row">
                            <button onclick="window.location.href = '#MCA-IV-2020';">Year 2020</button>
                            <button onclick="window.location.href = '#MCA-IV-2019';">Year 2019</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== Cards Part Close =================-->

        <!--=================== Paper contant Start ==============-->
        <div id="paper_contant">
            <div>
                <h1 class="heading_text" id="MCA-I-2022">MCA I Sem - Year 2022</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/c_programming-2022.pdf">MCA-101 PROGRAMMING-IN-C-WITH-DATA-STRUCTURE</a><br>
                <a href="assest/pdf/mathematics-2022.pdf">MCA-102 STATISTICAL-MATHEMATICS</a><br>
                <a href="assest/pdf/operating-system-2022.pdf">MCA-103 OPERATING-SYSTEM-AND-ARCHITECTURE</a><br>
                <a href="assest/pdf/infromatrion-technology-2022.pdf">MCA-104 INFORMATION-TECHNOLOGY</a><br>
                <a href="assest/pdf/communication-skills-2022.pdf">MCA-105 COMMUNICATION-SKILLS</a><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-I-2021">Year - 2021</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="#_blank">
                    <h5>Uploded soon</h5>
                </a>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-I-2020">Year - 2020</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/c_programming-2020.pdf">MCA-101 PROGRAMMING-IN-C-WITH-DATA-STRUCTURE</a><br>
                <a href="assest/pdf/mathematics-2020.pdf">MCA-102 STATISTICAL-MATHEMATICS</a><br>
                <a href="assest/pdf/operating-system-2020.pdf">MCA-103 OPERATING-SYSTEM-AND-ARCHITECTURE</a><br>
                <a href="assest/pdf/infromatrion-technology-2020.pdf">MCA-104 INFORMATION-TECHNOLOGY</a><br>
                <a href="assest/pdf/communication-skills-2020.pdf">MCA-105 COMMUNICATION-SKILLS</a><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-I-2019">Year - 2019</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="#_blank">
                    <h5>Uploded soon</h5>
                </a>
            </div>
            <br>
            <div>
                <h1 class="heading_text" id="MCA-II-2023">MCA II Sem - Year 2023</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/DBMS-2023.pdf">MCA-201 DATABASE-MANAGEMENT-SYSTEM</a><br>
                <a href="assest/pdf/computer-network-2023.pdf">MCA-202 COMPUTER-NETWORK</a><br>
                <a href="assest/pdf/software-enginerring-2023.pdf">MCA-203 SOFTWARE-ENGINEERING-AND-UML</a><br>
                <a href="assest/pdf/algorithm-design-2023.pdf">MCA-204 ALGORITHM-DESIGN</a><br>
                <a href="assest/pdf/java-2023.pdf">MCA-205 OBJECT-ORIENTED-PROGRAMMING-WITH-JAVA</a><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-II-2022">Year - 2022</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/DBMS-2022.pdf">MCA-201 DATABASE-MANAGEMENT-SYSTEM</a><br>
                <a href="assest/pdf/computer-network-2022.pdf">MCA-202 COMPUTER-NETWORK</a><br>
                <a href="#_blank">MCA-203 SOFTWARE-ENGINEERING-AND-UML</a><br>
                <a href="assest/pdf/algorithm-design-2022.pdf">MCA-204 ALGORITHM-DESIGN</a><br>
                <a href="assest/pdf/java-2022.pdf">MCA-205 OBJECT-ORIENTED-PROGRAMMING-WITH-JAVA</a><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-II-2022">Year - 2021</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="#_blank">
                    <h5>Uploded soon</h5>
                </a>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-II-2022">Year - 2020</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/DBMS-2020.pdf">MCA-201 DATABASE-MANAGEMENT-SYSTEM</a><br>
                <a href="assest/pdf/computer-network-2020.pdf">MCA-202 COMPUTER-NETWORK</a><br>
                <a href="assest/pdf/software-enginerring-2020.pdf">MCA-203 SOFTWARE-ENGINEERING-AND-UML</a><br>
                <a href="assest/pdf/java-2020.pdf">MCA-205 OBJECT-ORIENTED-PROGRAMMING-WITH-JAVA</a><br><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-III-2022">MCA III Sem - Year 2022</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/python-2022.pdf">MCA-301 PYTHON-PROGRAMMING</a><br>
                <a href="assest/pdf/webtech-2022.pdf">MCA-301 WEB-TECHNOLOGY</a><br>
                <a href="assest/pdf/Data_Science_&_Big_Data-2023.pdf">MCA-301
                    INTRODUCTION-TO-DATA-SCIENCE-AND-BIG-DATA</a><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-III-2020">Year - 2020</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="assest/pdf/Soft-computing-2020.pdf">MCA-302 SOFT-COMPUTING</a><br>
                <a href="assest/pdf/Distributed-System-2020.pdf">MCA-303 DISTRIBUTED-SYSTEM</a><br>
                <a href="assest/pdf/AI-2020.pdf">MCA-304 ALGORITHM-DESIGN</a><br>
                <a href="assest/pdf/DM-2020.pdf">MCA-305 DATA-MINING</a><br><br>
            </div>
            <div>
                <h1 class="heading_text" id="MCA-III-2022">MCA IV Sem - Year 2022</h1>
            </div>
            <div class="pdf-content" id="pdf-text">
                <a href="#_blank">
                    <h5>Uploded soon</h5>
                </a>
            </div>
        </div>
        <!--=================== Paper contant Close ==============-->

        <!----============ Footer Part Close ===============-->
        <div style=" margin-top:2%; padding:0px;">
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
    </header>

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

    <!--Footer Script-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>