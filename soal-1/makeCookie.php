<?php
if (isset($_POST['submit'])) {
    $fields = ['username', 'cita', 'band', 'warna', 'hewan'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            setcookie($field, htmlspecialchars($_POST[$field]), time() + 1800, "/");
        }
    }

    header("Location: index.php");
    exit();
}