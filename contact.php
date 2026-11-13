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
    <title>Contact Us</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card card-wide">
        <h2 style="text-align: center; margin-bottom: 20px;">Contact Us</h2>
        
        <div style="font-size: 15px; line-height: 2; color: #111;">
            <p><strong>Email :</strong> studenthub@gmail.com</p>
            <p><strong>Phone :</strong> +91 9876543210</p>
            <p><strong>Address :</strong> CSPIT, CHARUSAT University, Changa</p>
            <p><strong>Office Time :</strong> 9:00 AM to 5:00 PM</p>
        </div>

        <a href="dashboard.php" class="btn btn-back">&larr; Back to Dashboard</a>
    </div>
</body>
</html>
