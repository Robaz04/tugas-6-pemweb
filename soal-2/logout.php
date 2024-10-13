<?php
if (isset($_POST['logout'])) {
    session_start();
    session_destroy(); // Destroy the session

    header("Location: login.php"); // Redirect to login page
    exit();
}