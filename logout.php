<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Logout Successfully</h2>
        <p style="margin-top: 15px; color: #444; font-size: 15px;">Thank you for using StudentHub.</p>
        <p style="margin-top: 10px; margin-bottom: 25px; color: #444; font-size: 15px;">Have a nice day!</p>
        
        <a href="index.php" class="btn">Login Again</a>
    </div>
</body>
</html>