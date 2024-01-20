<?php
    $subject = $_POST['subject'];
    $unit = $_POST['unit'];
    $notes = $_POST['notes'];
   
    $conn = new mysqli("server name", "username", "password", "database name");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // For Semester 4
    $sql = "INSERT INTO semester4 VALUES ('$subject','$unit','$notes')";
    if(mysqli_query($conn, $sql))
    {
        echo '<script> window.location.href="facultypage.php";</script>';
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
