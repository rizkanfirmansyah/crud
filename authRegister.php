<?php
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conf, "INSERT INTO `cobausers`(`username`, `password`) VALUES ('$username','$password')");

header("Location:loginPage.php");
