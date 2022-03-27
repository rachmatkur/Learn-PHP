<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <?php
    require_once "functions.php";
    session_start();

    if (cekDaftar()) {
        pesan("anda belum register");
        movePage('register.php');
    } else if ($_SESSION['loginCek'] == false) {
        pesan("anda belum login");
        movePage('login.php');
    }
    ?>


    <div class="container">
        <div class="navbar">
            <h2>Aplikasi Pengelolaan Keuangan</h2>
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div class="content home">
            <p>Halo <b> <?php echo $_SESSION['namaDepan'] . " " . $_SESSION['namaTengah'] . " " . $_SESSION['namaBelakang']; ?> </b>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>
        </div>
    </div>
    </div>
</body>

</html>