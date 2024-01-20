<?php
    $subject = $_POST['subject'];
    $unit = $_POST['unit'];
    $notes = $_POST['notes'];
   
    $conn = new mysqli("fdb1033.awardspace.net", "3997385_notes", "e98}M3u/6z4-?AXZ", "3997385_notes");
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