<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
</html>

<?php

 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection (assuming you have a database)
    include("connection.php");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  
    // Get user input
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Validate user credentials (replace with appropriate validation and hashing in a production environment)
    $query = "SELECT * FROM signup WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $query);

    // Check if the query returned a matching user

    if($email == "admin@gmail.com" && $pass== "12345") 
    {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Invalid email and password',
            text: 'Please try again.'
        }).then(() => {
            setTimeout(() => {
                window.location.href = 'Signin.php';
            }, 100); 
        });
      </script>";
    exit();
    }
    elseif($result && mysqli_num_rows($result) > 0) 
    {
        // Authentication successful
        $_SESSION["email"] = $email;
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Successfully Sign in !',
            text: ' '
        }).then(() => {
            setTimeout(() => {
                window.location.href = 'home.php';
            }, 100); 
        });
      </script>";
        exit();
    } 
    else
    {   
        // Authentication failed
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Invalid email and password',
            text: 'Please try again.'
        }).then(() => {
            setTimeout(() => {
                window.location.href = 'Signin.php';
            }, 100); 
        });
      </script>";
    }
    }
?>