<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Messages</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { 
    font-family: Arial, sans-serif; 
    background: #c8c6c6ff; 
    padding: 20px;
}

h2 { 
    text-align: center; 
    color: #272928ff; 
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 26px;
}

table { 
    width: 100%; 
    border-collapse: collapse; 
    margin-top: 20px; 
    background: #fff; 
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td { 
    border: 1px solid #f3eeeeff; 
    padding: 15px; 
    text-align: left; 
    font-size: 18px;
    color: #0e0808ff;   /* FIX: makes all text dark & visible */
}

th { 
    background: #3e6472ff; 
    color: white; 
    font-weight: bold;
}

tr:nth-child(even) { 
    background: #f9f9f9; 
}

a.logout { 
    display: inline-block; 
    margin: 10px 0; 
    padding: 10px 16px; 
    background: #516a6bff; 
    color: #ffffffff; 
    text-decoration: none; 
    border-radius: 6px;
    font-weight: bold;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
a.logout:hover { 
    background: #3b413c; 
}

.delete-btn { 
    background: #d4504bff; 
    color: white; 
    padding: 6px 12px; 
    border-radius: 6px; 
    text-decoration: none; 
    font-size: 14px;
    font-weight: bold;
}
.delete-btn:hover { 
    background: #c9302c; 
}
.reply-btn {
    background: #56a956ff;
    color: white;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    margin-left: 6px;
}
.reply-btn:hover {
    background: #449d44;
}

    </style>
</head>
<body>
    <div class="container">
        <a href="logout.php" class="logout">🔒 Logout</a>
        <h2>📩 Contact Messages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['fullname']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['subject']); ?></td>
                    <td><?= nl2br(htmlspecialchars($row['message'])); ?></td>
                    <td><?= $row['created_at']; ?></td>
                    <td>
    <a class="delete-btn" href="delete.php?id=<?= $row['id']; ?>" 
       onclick="return confirm('Are you sure you want to delete this message?');">Delete</a>
    <a class="reply-btn" href="reply.php?email=<?= urlencode($row['email']); ?>&subject=<?= urlencode("Re: " . $row['subject']); ?>">Reply</a>
</td>

                </tr>
            <?php endwhile; ?>
        </table>
