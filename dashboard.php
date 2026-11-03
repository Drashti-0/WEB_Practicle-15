<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="avatar-icon">👤</div>
        <h2>Student Dashboard</h2>
        <p class="subtitle">Welcome to StudentHub</p>

        <a href="about.php" class="btn">About Us</a>
        <a href="contact.php" class="btn">Contact Us</a>
        <a href="events.php" class="btn">Events</a>
        <a href="#" class="btn">Books</a>
        <a href="#" class="btn">Tech News</a>
        <a href="#" class="btn">Games</a>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>