<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $profile = $_POST['profile'];
    $designation = $_POST['designation'];
    $msg = $_POST['msg'];

    $conn = new mysqli("fdb1033.awardspace.net", "3997385_notes", "e98}M3u/6z4-?AXZ", "3997385_notes");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback VALUES ('$fname','$lname','$profile','$designation','$msg')";
    if(mysqli_query($conn, $sql))
    {
        echo '<script> window.location.href="feedback.php";</script>';
    }
   else 
   {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>