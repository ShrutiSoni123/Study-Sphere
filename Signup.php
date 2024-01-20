<?php
include("connection.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="assest/images/clg_logo.jpg">
        <title>Study Sphere</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="sign-up.css">
        <script>
            function myFunction() {
              var x = document.getElementById("conpass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
        </script>
        <script type="text/javascript">  
            function matchpass(){  
            var first=document.getElementById("pass").value;
            // var second=document.f1.cpsw.value;  
            var second=document.getElementById("conpass").value;
            if(first==second)
            {  
            return true; 
            }  
            else
            {  
            alert("password must be same!");  
            return false;  
            }  
            }  
        </script>  
    </head>
    <body>
        <div class="container">        
            <!-- Left Partiotion -->
            <div class="left">
                <form class="form" onsubmit="return matchpass()" action="signupdata.php" method="POST" id="SignupForm">
                    <h3>Sign Up</h3><br>
                    <div>
                        <div class="input-group">
                            <span class="input-group-text" >
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <span class="form-floating mb-0 mt-0">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"  required>
                                <label for="email">Email</label>
                            </span>
                        </div><br>
                        
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <span class="form-floating mb-0 mt-0">
                                <!-- <input type="password" class="form-control" id="psw" placeholder="Enter password" required> -->
                                <input type="password" class="form-control" id="pass" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}" title="Must contain at least one uppercase, lowecase letter, number and a special symbol and at least 8 or more characters." name="pass" required>
                                <label for="pass">Create Password</label> 
                                <!-- (?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} -->
                            </span>
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <span class="form-floating mb-0 mt-0">
                                <input type="password"  name="conpass" class="form-control" id="conpass" placeholder="Enter password" required>                                
                                <label for="conpass">Confirm Password</label>
                            </span>
                        </div><br>
                        <span class="show"><input type="checkbox" onclick="myFunction()"> Show Password</span><br><br>
        
                    <center><button class="sign_up" type="submit">Sign Up</button></center><br>
                    <!-- <div class="login_option">Or login via <i class="bi bi-google"> Google</i></div> -->
                </form>
            </div>

            <!-- Right partition -->
            <div class="right">
                <h2 class="text">Hello! User</h2>
                <p class="text_para"></p>
                <div class="text_bottom">Already have an account?</div><br>
                <center><a href="Signin.php">Sign In</a></center>
            </div>
        </div>             
    </body>
</html>
