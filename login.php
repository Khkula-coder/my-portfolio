<?php
session_start();
include 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: messages.php");
            exit;
        } else {
            $error = "❌ Wrong password!";
        }
    } else {
        $error = "❌ User not found!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
<style>
    body { 
        font-family: Arial, sans-serif; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        background: #373f41ff;
    }

    .login-box { 
        background: #ffff; 
        padding: 30px 40px; /* more padding */
        border-radius: 14px; 
        box-shadow: 0 0 15px rgba(0,0,0,0.15); 
        width: 500px;  /* bigger width */
        height: 360px; /* taller */
        border: 3.5px solid black;
    }

    h2 { 
        color: #373f41ff; 
        text-align: center; 
        margin-bottom: 35px; 
        font-size: 28px; /* slightly bigger */
    }

    input { 
        width: 100%; 
        padding: 12px; /* bigger */
        margin: 12px 0; 
        border: 1px solid #9e9c9cff; 
        border-radius: 7px; 
        font-size: 17px; /* bigger font */
    }

    button { 
        width: 100%; 
        padding: 14px; /* bigger */
        background: #3a606e; 
        color: #fff; 
        border: none; 
        border-radius: 7px; 
        cursor: pointer;
        font-size: 17px; 
    }

    button:hover { 
        background: #607b7d; 
    }

    .error { 
        color: red; 
        text-align: center; 
        margin-top: 10px;
        font-size: 16px;
    }
</style>


</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if($error): ?>
            <p class="error"><?= $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
