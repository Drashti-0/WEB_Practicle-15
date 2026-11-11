<?php
session_start();
require 'db.php'; 

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking user from database 
    $sql = "SELECT * FROM users WHERE student_id='$student_id' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['student_id'] = $student_id;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Student ID or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>STUDENTPORTAL</h1>
        <p class="subtitle">Welcome Back Student</p>
        
        <?php if($error != ""): ?>
            <p style="color:red; font-size:13px; margin-bottom:10px;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>Student ID</label>
                <input type="text" name="student_id" placeholder="25cs003" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
