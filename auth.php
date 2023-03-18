<?php
session_start();
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conf, "SELECT * FROM cobausers WHERE username='$username' AND password='$password'");


$cek = mysqli_num_rows($data);
$data = $data->fetch_assoc();
if ($cek > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['iduser'] = $data['id'];
    $_SESSION['role'] = $data['role'];

    setcookie('username', $data['username'], time() + (60 * 2), '/');

    if ($data['role'] == 1) {
        header("location:index.php");
    } else {
        header("location:user.php");
    }
} else {
    header("location:loginPage.php");
}
