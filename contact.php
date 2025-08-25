<?php
// contact.php

header('Content-Type: text/plain'); // Make sure response is plain text

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input with real_escape_string for SQL safety
    $fullname = $conn->real_escape_string($_POST['name'] ?? '');
    $email    = $conn->real_escape_string($_POST['email'] ?? '');
    $subject  = $conn->real_escape_string($_POST['subject'] ?? '');
    $message  = $conn->real_escape_string($_POST['message'] ?? '');
    
    // Basic validation: ensure none are empty (optional but recommended)
    if (empty($fullname) || empty($email) || empty($subject) || empty($message)) {
        echo 'error';
        exit;
    }

    // Insert into messages table
    $sql = "INSERT INTO messages (fullname, email, subject, message) 
            VALUES ('$fullname', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}

?>

