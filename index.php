<?php
session_start();
require 'config.php';

if (!isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    header("location:loginPage.php");
}


// $_GET => ngambil inputan data, dalam URL

// http://localhost/crud/index.php?page=1

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$load = 5;

$datas = mysqli_query($conf, 'SELECT * FROM siswa');
if (isset($_GET['search'])) {
    if (!empty($_GET['search'])) {
        $keyword = $_GET['search'];
        $data = mysqli_query($conf, "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%'");
    } else {
        $data = $datas;
    }
} else {
    $limit = $page * $load - $load;
    $data = mysqli_query($conf, "SELECT * FROM siswa LIMIT $limit, $load");

    $paginate =  ceil(count($datas->fetch_all()) / $load);
}

$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hehe</title>
</head>

<style>
    .active {
        font-weight: bold;
        color: green;
    }
</style>

<body>

    <h1>TABLE DATA SISWA</h1>

    <form action="" method="GET">
        <input type="text" name="search">
        <button type="submit">cari</button>
    </form>

    <h1>Selamat Datang, <?= $_SESSION['username'] ?></h1>


    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>NIS</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Telepon</td>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($data as $d) {  ?>
                <?php $i++; ?>
                <tr>
                    <td><?php echo $i + $limit; ?></td>
                    <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                    <td><?php echo $d['telepon'] ?></td>
                </tr>
            <?php }  ?>
        </tbody>
    </table>

    <div>
        <?php for ($i = 1; $i <= $paginate; $i++) : ?>
            <a href="?page=<?= $i ?>" class="
            <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == $i) {
                    echo 'active';
                }
            } else if ($i === 1) {
                echo 'active';
            }

            ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>

    <a href="logout.php">Logout</a>


</body>

</html>