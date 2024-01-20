<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email and pass keys are set in the $_POST array
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $conn = new mysqli("server name", "username", "password", "database name");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Security: Hash and verify the password
        $hashedPassword = password_hash("12345", PASSWORD_DEFAULT);

        if ($email == "admin@gmail.com" && password_verify($pass, $hashedPassword)) {
            $_SESSION["email"] = $email;

            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Successfully ! ',
                    text: ' '
                }).then(() => {
                    setTimeout(() => {
                        window.location.href = 'facultypage.php';
                    }, 100);
                });
            </script>";
            exit();
        } else {
            // Authentication failed
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid email and password',
                    text: 'Please try again.'
                }).then(() => {
                    setTimeout(() => {
                        window.location.href = 'facultysignin.php';
                    }, 100);
                });
            </script>";
        }
    } else {
        // Handle the case where email or pass is not set in $_POST
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Invalid form submission',
                text: 'Please try again.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'facultysignin.php';
                }, 100);
            });
        </script>";
    }
}
?>
