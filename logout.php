<?php
session_start();
session_destroy();

setcookie('username', null, -1, '/');
header("location:loginPage.php");
