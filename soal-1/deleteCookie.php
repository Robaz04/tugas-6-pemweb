<?php
if (isset($_POST['logout'])) {
    $cookies = ['username', 'cita', 'band', 'warna', 'hewan'];
    foreach ($cookies as $cookie) {
        setcookie($cookie, "", time() - 1800, "/");
    }
    header("Location: index.php");
    exit();
}