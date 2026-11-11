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
    <title>About StudentHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card card-wide">
        <h2 style="text-align: center; margin-bottom: 15px;">About StudentHub</h2>
        <p style="font-size: 14px; line-height: 1.5; color: #333; margin-bottom: 20px;">
            StudentHub is an online student portal developed to help students access academic information in one place. Students can easily view events, news, contact details and many useful resources.
        </p>
        
        <h3>Our Features</h3>
        <ul style="margin-left: 20px; margin-top: 10px; line-height: 1.8; color: #333; font-size: 14px;">
            <li>Student Dashboard</li>
            <li>About Us</li>
            <li>Contact Information</li>
            <li>Events</li>
            <li>Books</li>
            <li>Tech News</li>
            <li>Games</li>
        </ul>

        <a href="dashboard.php" class="btn btn-back">&larr; Back to Dashboard</a>
    </div>
</body>
</html>
