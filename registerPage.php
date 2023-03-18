<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>

<body>
    <h1>Halaman Register</h1>
    <form method="POST" action="authRegister.php">
        <label for="Username">Username</label>
        <input type="text" name="username" placeholder="Masukan Username atau Email">
        <br>
        <br>
        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="Masukan Password">
        <br>
        <button type="submit">Register</button>
    </form>
</body>

</html>