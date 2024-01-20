<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
</html>
<?php

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];

    $conn = new mysqli("server name", "username", "password", "database name");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO signup VALUES ('$email','$pass','$conpass')";

    try {
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Congratulations !. ',
                text: 'You Have Registered Successfully.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 100); // Delay for 2 seconds (adjust as needed)
            });
          </script>";
        } 
        else
         {
            throw new Exception($conn->error, $conn->errno);
        }
    } catch (Exception $e) {
        if ($e->getCode() == 1062) {  // MySQL error code for duplicate entry
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'This email address is already registered. ',
                text: 'Please use a different email address.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'Signup.php';
                }, 100); // Delay for 2 seconds (adjust as needed)
            });
          </script>";
    exit();
        } else {
            echo "Error: " . $e->getMessage();
            echo '<script> window.location.href="Signup.php";</script>';
        }
    }
  

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //     // Security: Hash and verify the password
    //     $hashedPassword = password_hash("12345", PASSWORD_DEFAULT);
    
    //     if ($email == "admin@gmail.com" && password_verify($pass, $hashedPassword)) 
    //     {
    //         // Security: Start a session to store user information
    //         session_start();
    //         $_SESSION["email"] = $email;

    //         // Prevent Header Injection: Ensure no output is sent before header()
    //         ob_start();

    //         header("Location: facultypage.php");
    //         exit();
    //     } 
    //     else 
    //     {
    //         echo "Invalid credentials. Please try again.";
    //     }
    // }
?> 
