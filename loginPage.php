<?php
session_start();

if (isset($_COOKIE['username'])) {
    header("location:index.php");
} else {
    if (isset($_SESSION['username'])) {
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <form method="POST" action="auth.php">
        <label for="Username">Username</label>
        <input type="text" name="username" placeholder="Masukan Username atau Email">
        <br>
        <br>
        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="Masukan Password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>