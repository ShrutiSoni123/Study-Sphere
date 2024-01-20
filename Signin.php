<?php
include("connection.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
        <title>Study Sphere</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="sign-in.css">
        <script>
            function myFunction() {
              var x = document.getElementById("pass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <h2 class="text">Welcome Back!!!</h2>
                <p class="text_para">You can sign in to access with your existing account.</p>
                <div class="text_bottom">Don't have an account ?</div><br>
                <a href="Signup.php">Sign Up</a>
            </div>
            <div class="right">
                <form class="form" action="signindata.php" method="POST">
                    <h3>Sign In</h3><br>
                    <div>
                        <div class="input-group">
                            <span class="input-group-text" >
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <span class="form-floating mb-0 mt-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                                <label for="email">Email</label>
                            </span>
                        </div><br>
                        
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <span class="form-floating m0-2 mt-0">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required>
                                <label for="pass">Password</label>
                            </span>
                        </div><br>
                        <span class="show"><input type="checkbox" onclick="myFunction()"> Show Password</span>
        
                    <span class="forgot"><a href="#">Forgot Password?</a></span><br><br><br>
                    <center><button class="sign_in" >Sign In</button></center><br>
                    <div class="login_option">Or login via <i class="bi bi-google"> Google</i></div>
                 </div>
                </form>
             </div>
           </div> 
    </body>
</html>