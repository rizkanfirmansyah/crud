<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
</head>

<body>

    <h1>Halaman User</h1>
    <h2>Selamat Datang, <?= $_SESSION['username'] ?></h2>

    <a href="logout.php">Logout</a>

</body>

</html>