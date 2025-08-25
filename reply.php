<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

$toEmail = isset($_GET['email']) ? $_GET['email'] : '';
$subject = isset($_GET['subject']) ? $_GET['subject'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reply Message</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #c8c6c6ff;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #716868ff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            border: 3.5px solid #373333ff;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #696262ff;
            border-radius: 6px;
        }
        button {
            background: #293b42ff;
            color: #fff;
            border: none;
            padding: 12px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }
        button:hover {
            background: #3b413c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📩 Reply to Message</h2>
        <form action="send_reply.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($toEmail); ?>" readonly>

            <label>Subject:</label>
            <input type="text" name="subject" value="<?= htmlspecialchars($subject); ?>">

            <label>Message:</label>
            <textarea name="message" rows="6" required></textarea>

            <button type="submit">Send Reply</button>
        </form>
    </div>
</body>
</html>
