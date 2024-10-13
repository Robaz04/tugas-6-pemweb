<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit();
}

// Akun
$valid_username = ["admin", 'robby'];
$valid_password = ["admin", '230008'];
$error = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (($username === $valid_username[0] && $password === $valid_password[0]) || ($username === $valid_username[1] && $password === $valid_password[1])) {
        if ($username == $valid_username[0]) {
            $_SESSION['username'] = $username;
        } else if ($username == $valid_username[1]) {
            $_SESSION['username'] = "Robby Azwan Saputra";
        }
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="log.css">

</head>

<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>

</body>

</html>