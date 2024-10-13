<?php
if (isset($_COOKIE['username'])) {
    $greeting = "Selamat datang, " . htmlspecialchars($_COOKIE['username']) . "!";
    $cita = htmlspecialchars($_COOKIE['cita']);
    $band = htmlspecialchars($_COOKIE['band']);
    $warna = htmlspecialchars($_COOKIE['warna']);
    $hewan = htmlspecialchars($_COOKIE['hewan']);
} else {
    $greeting = "Selamat datang, strangers!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Web</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1><?php echo $greeting; ?></h1>

        <?php if (!isset($_COOKIE['username'])): ?>
            <h2>Silahkan isi data di bawah!</h2>
            <form method="POST" action="makeCookie.php">
                <div class="form-group">
                    <label for="username">Nama Anda:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="cita">Cita-Cita:</label>
                    <input type="text" id="cita" name="cita" required>
                </div>

                <div class="form-group">
                    <label for="band">Band Favorit:</label>
                    <input type="text" id="band" name="band" required>
                </div>

                <div class="form-group">
                    <label for="warna">Warna Favorit:</label>
                    <input type="text" id="warna" name="warna" required>
                </div>

                <div class="form-group">
                    <label for="hewan">Hewan Favorit:</label>
                    <input type="text" id="hewan" name="hewan" required>
                </div>

                <button type="submit" name="submit">Submit</button>
            </form>
        <?php else: ?>
            <div class="text">
                <p>Anda bercita-cita menjadi <span><?php echo $cita; ?></span>.</p>
                <p>Band favorit Anda adalah <span><?php echo $band; ?></span>.</p>
                <p>Warna favorit Anda adalah <span><?php echo $warna; ?></span>.</p>
                <p>Hewan favorit Anda adalah <span><?php echo $hewan; ?></span>.</p>
            </div>
            <form method="POST" action="deleteCookie.php">
                <button type="submit" name="logout">Keluar</button>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>