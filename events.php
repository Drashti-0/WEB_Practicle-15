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
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card card-wide" style="background: transparent; box-shadow: none; padding: 0;">
        <h2 style="text-align: right; color: #0b3c5d; margin-bottom: 20px;">Upcoming Events</h2>

        <div class="event-card">
            <div class="event-details">
                <h3>Coding Competition</h3>
                <p>Date : 25 July 2026</p>
            </div>
        </div>

        <div class="event-card">
            <div class="event-details">
                <h3>AI Workshop</h3>
                <p>Date : 28 July 2026</p>
            </div>
        </div>

        <div class="event-card">
            <div class="event-details">
                <h3>Hackathon</h3>
                <p>Date : 2 August 2026</p>
            </div>
        </div>

        <div class="event-card">
            <div class="event-details">
                <h3>Sports Week</h3>
                <p>Date : 10 August 2026</p>
            </div>
        </div>

        <div class="event-card">
            <div class="event-details">
                <h3>Annual Function</h3>
                <p>Date : 20 August 2026</p>
            </div>
        </div>

        <a href="dashboard.php" class="btn btn-back">&larr; Back to Dashboard</a>
    </div>
</body>
</html>