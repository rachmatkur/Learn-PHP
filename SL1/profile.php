<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <h1>Profile Pribadi</h1>
        <div class="content">
            <div class="box">
                <div class="data-profile">
                    <p>Nama Depan : <b><?php echo $_SESSION['namaDepan']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Tempat Lahir : <b><?php echo $_SESSION['tl']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Warga Negara : <b><?php echo $_SESSION['wn']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Alamat : <b><?php echo $_SESSION['alamat']; ?></b></p>
                </div>
            </div>
            <div class="box">
                <div class="data-profile">
                    <p>Nama Tengah : <b><?php echo $_SESSION['namaTengah']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Tgl Lahir : <b><?php echo date('d-m-Y', strtotime($_SESSION['ttl'])); ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Email : <b><?php echo $_SESSION['email']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Kode POS : <b><?php echo $_SESSION['pos']; ?></b></p>
                </div>
            </div>
            <div class="box">
                <div class="data-profile">
                    <p>Nama Belakang : <b><?php echo $_SESSION['namaBelakang']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>NIK : <b><?php echo $_SESSION['nik']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>No HP : <b><?php echo $_SESSION['phone']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Foto Profile : </p>
                    <img src="<?php echo $_SESSION['photoLoc']; ?>" alt="Photo Profile" style="max-height: 250px; ">
                </div>
            </div>
        </div>
    </div>
</body>

</html>