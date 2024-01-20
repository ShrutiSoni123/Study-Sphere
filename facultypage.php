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
  <!-- Font Awesome Icons Link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="notes.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

    #nav-logout {
      background-color: goldenrod;
      color: black;
      text-transform: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .cardsf-list {
      z-index: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding-top: 7%;
    }

    .cardsf {
      margin: 30px auto;
      width: 290px;
      height: 300px;
      border-radius: 40px;
      overflow: hidden;
      box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25),
        -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
      border: 1px solid goldenrod;
      border-bottom: 8px solid goldenrod;
      cursor: pointer;
     
    }

    .cardsf .cardsf_image {
      width: 100%;
      height: 100%;
      border-radius: 40px;
      overflow: hidden;
    }

    .cardsf .cardsf_image img {
      width: 100%;
      height: 100%;
      border-radius: 40px;
      object-fit: cover;
    }

    .cardsf .cardsf_title {
      text-align: center;
      border-radius: 0px 0px 40px 40px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bold;
      font-size: 25px;
      margin-top: -70px;
      height: 40px;
      color: goldenrod;
    }

    .cardsf:hover {
      transform: scale(0.9, 0.9);
      box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
        -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
    }

    @media all and (max-width: 500px) {
      .cardsf-list {
        flex-direction: column;
      }
    }
  </style>

</head>

<body>
  <!--================= Header Part Start ===============-->
  <header>
    <nav>
      <a href="#home"><img src="assest/images/clg_logo.jpg" class="clg_logo" style="mix-blend-mode:light;"></a>
      <ul>
        <li>
          <a href="home.php" id="nav-logout">Logout</a>
        </li>
      </ul>
    </nav>

    <!-- <div class="alert alert-dismissible fade show" role="alert" style="margin-top:6.6%; background-color:goldenrod; color:black;">
      <strong>Successfully Logged in !</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->

    <!--================= Cards Code Part Close ===============-->

    <div class="cardsf-list">

      <div class="cardsf">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter1" style="background:transparent; border:none;">
          <div class="cardsf_image"> <img src="assest/images/giphy.gif" /> </div>
          <div class="cardsf_title title-white">
            <a href="#" style="color:goldenrod;">
              <p>Semester 1</p>
            </a>
          </div>
        </button><br><br>
      </div>

      <div class="cardsf">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" style="background:transparent; border:none;">
          <div class="cardsf_image"><img src="assest/images/giphy.gif" /></div>
          <div class="cardsf_title title-white">
            <a href="#" style="color:goldenrod;">
              <p>Semester 2</p>
            </a>
          </div>
        </button><br><br>
      </div>

      <div class="cardsf">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter3" style="background:transparent; border:none;">
          <div class="cardsf_image"><img src="assest/images/giphy.gif" /></div>
          <div class="cardsf_title title-white">
            <a href="#" style="color:goldenrod;">
              <p>Semester 2</p>
            </a>
          </div>
        </button><br><br>
      </div>

      <div class="cardsf">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter4" style="background:transparent; border:none;">
          <div class="cardsf_image">
            <img src="assest/images/giphy.gif" />
          </div>
          <div class="cardsf_title title-white">
            <a href="#" style="color:goldenrod;">
              <p>Semester 4</p>
            </a>
          </div>
      </div>
    </div>
    </div>

    <!--================= Cards Code Part Close ===============-->

    <!--================= Footer Part Close ===============-->
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Notes Gallery</h3>
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
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor
          lacus
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
    <!--================= Footer Part Close ===============-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- Modal For Semester 1 -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: goldenrod; color: black; box-shadow: 3px 4px 4px 1px white;">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle"><b>Semester 1</b></h4>
            <form action="facultydata.php" method="POST">
              <select name="subject" id="subjectSelect" style="padding-left: 5px; margin-right:15px; padding:3px;" required>
                <option value="C Language">C Language</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Operating System">Operating System</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Communication Skills">Communication Skills</option>
              </select>
              <select name="unit" id="unitSelect" style="margin-right:15px; margin-left:2px; padding:3px;" required>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
                <option value="Unit 3">Unit 3</option>
                <option value="Unit 4">Unit 4</option>
                <option value="Unit 5">Unit 5</option>
              </select>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: transparent; border:none; font-size:30px;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <label>Upload Notes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="file" value="upload" name="notes" style="width: 41%; padding-bottom: 5%;" re>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnn" style="width: 25%;" onclick="return submitForm()">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function submitForm() {
        var selectedSubject = document.getElementById("subjectSelect").value;
        //var alertMessage = "Notes of " + selectedSubject + " is uploaded Successfully !";
       // alert(alertMessage);
              Swal.fire({
             icon: 'success',
             title: 'Notes of ' + selectedSubject + ' is uploaded Successfully !',
              text: ' ',
              timer: 2000, // Adjust the delay time as needed
              allowOutsideClick: false // Prevent users from clicking outside the alert to dismiss it
           //}).then(() => {
             //window.location.href = 'facultypage.php';
           });

          // Prevent the default form submission
         // return false;
      }
    </script>

    <!-- Modal For Semester 2 -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: goldenrod; color: black; box-shadow: 3px 4px 4px 1px white;">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle"><b>Semester 2</b></h4>
            <form action="sem2data.php" method="POST">
              <select name="subject" id="subjectSelect1" style="padding-left: 5px; margin-right:15px; padding:3px;" required>
                <option value="DBMS">DBMS</option>
                <option value="Computer Network">Computer Network</option>
                <option value="Algorithm Design">Algorithm Design</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Java">Java</option>
              </select>
              <select name="unit" style="margin-right:15px; margin-left:2px; padding:3px;" required>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
                <option value="Unit 3">Unit 3</option>
                <option value="Unit 4">Unit 4</option>
                <option value="Unit 5">Unit 5</option>
              </select>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: transparent; border:none; font-size:30px;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <label>Upload Notes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="file" value="upload" name="notes" style="width: 41%; padding-bottom: 5%;" required>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnn" style="width: 25%;" onclick="return submitForm1()">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function submitForm1() {
        var selectedSubject = document.getElementById("subjectSelect").value;
       // var alertMessage = "Notes of " + selectedSubject + " is uploaded Successfully !";
       // alert(alertMessage);
                            Swal.fire({
             icon: 'success',
             title: 'Notes of ' + selectedSubject + ' is uploaded Successfully !',
              text: ' ',
              timer: 2000, // Adjust the delay time as needed
              allowOutsideClick: false // Prevent users from clicking outside the alert to dismiss it
           //}).then(() => {
             //window.location.href = 'facultypage.php';
           });

          // Prevent the default form submission
         // return false;
      }
    </script>

    <!-- Modal For Semester 3 -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: goldenrod; color: black; box-shadow: 3px 4px 4px 1px white;">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle"><b>Semester 3</b></h4>
            <form action="sem3data.php" method="POST">
              <select name="subject" id="subjectSelect2" style="padding-left: 5px; margin-right:5px; padding:3px;" required>
                <option value="Data Mining">Data Mining</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <optgroup label="Elective-I">
                  <option value="Python Programming">Python Programming</option>
                  <option value="Web Technology">Web Technology</option>
                  <option value="Data Science & Big Data">Data Science & Big Data</option>
                </optgroup>
                <optgroup label="Elective-II">
                  <option value="Machine Learning">Machine Learning</option>
                  <option value="Soft Computing">Soft Computing</option>
                  <option value="Internet of Things">Internet of Things</option>
                </optgroup>
                <optgroup label="Elective-III">
                  <option value="Computer Ethics">Computer Ethics</option>
                  <option value="Advanced DBMS">Advanced DBMS</option>
                  <option value="Distributed System">Distributed System</option>
                </optgroup>
              </select>
              <select name="unit" style="margin-right:15px; margin-left:2px; padding:3px;" required>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
                <option value="Unit 3">Unit 3</option>
                <option value="Unit 4">Unit 4</option>
                <option value="Unit 5">Unit 5</option>
              </select>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: transparent; border:none; font-size:30px;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <label>Upload Notes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="file" value="upload" name="notes" style="width: 41%; padding-bottom: 5%;" required>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnn" style="width: 25%;" onclick="return submitForm2()">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function submitForm2() {
        var selectedSubject = document.getElementById("subjectSelect").value;
        //var alertMessage = "Notes of " + selectedSubject + " is uploaded Successfully !";
        //alert(alertMessage);
             Swal.fire({
             icon: 'success',
             title: 'Notes of ' + selectedSubject + ' is uploaded Successfully !',
              text: ' ',
              timer: 2000, // Adjust the delay time as needed
              allowOutsideClick: false // Prevent users from clicking outside the alert to dismiss it
           //}).then(() => {
             //window.location.href = 'facultypage.php';
           });

          // Prevent the default form submission
         // return false;
      }
    </script>

    <!-- Modal For Semester 4 -->
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: goldenrod; color: black; box-shadow: 3px 4px 4px 1px white;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><b>Semester 4</b></h5>
            <form action="sem4data.php" method="POST">
              <select name="subject" id="subjectSelect3" required>
                <optgroup label="Elective-IV">
                  <option value="Advanced Python">Advanced Python</option>
                  <option value="Advanced Web Technology">Advanced Web Technology</option>
                  <option value="Big Data Analytics">Big Data Analytics</option>
                </optgroup>
                <optgroup label="Elective-V">
                  <option value="Deep Learning">Deep Learning</option>
                  <option value="Cloud Computing Technologies">Cloud Computing Technologies</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                </optgroup>
                <optgroup label="Elective-VI">
                  <option value="Information Security">Information Security</option>
                  <option value="Block Chain & Cryptocurrency">Block Chain & Cryptocurrency</option>
                  <option value="Mobile Computing">Mobile Computing</option>
                </optgroup>
              </select>
              <select name="unit" required>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
                <option value="Unit 3">Unit 3</option>
                <option value="Unit 4">Unit 4</option>
                <option value="Unit 5">Unit 5</option>
              </select>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: transparent; border:none; font-size:30px;">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <label>Upload Notes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="file" value="upload" name="notes" style="width: 41%; padding-bottom: 5%;" required>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnn" style="width: 25%;" onclick="return submitForm3()">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function submitForm3() {
        var selectedSubject = document.getElementById("subjectSelect").value;
        //var alertMessage = "Notes of " + selectedSubject + " is uploaded Successfully !";
        //alert(alertMessage);
             Swal.fire({
             icon: 'success',
             title: 'Notes of ' + selectedSubject + ' is uploaded Successfully !',
             text: ' ',
             timer: 2000, // Adjust the delay time as needed
             allowOutsideClick: false // Prevent users from clicking outside the alert to dismiss it
           //}).then(() => {
             //window.location.href = 'facultypage.php';
           });

          // Prevent the default form submission
         // return false;
      }
    </script>

  </header>
</body>
</html>