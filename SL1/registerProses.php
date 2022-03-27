<?php
session_start();

require_once "functions.php";

if (isset($_POST['submit'])) {
    $password = $_POST['pass'];
    $conPass = $_POST['conPass'];
    $username = $_POST['username'];

    $namaDepan = $_POST['namaDepan'];
    $namaTengah = $_POST['namaTengah'];
    $namaBelakang = $_POST['namaBelakang'];
    $ttl = $_POST['ttl'];
    $tl = $_POST['tl'];
    $wn = $_POST['wn'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pos = $_POST['pos'];
    $nik = $_POST['nik'];
    $phone = $_POST['phone'];

    $photoName = $_FILES['photos']['name'];
    $tempName = $_FILES['photos']['tmp_name'];

    if ($password != $conPass) {
        pesan("password tidak sama");
        movePage("register.php");
    } else if ($photoName == null) {
        pesan("photo null");
        movePage("register.php");
    } else {
        $_SESSION['passSession'] = $password;
        $_SESSION['usernameSession'] = $username;
        $_SESSION['namaDepan'] = $namaDepan;
        $_SESSION['namaTengah'] = $namaTengah;
        $_SESSION['namaBelakang'] = $namaBelakang;
        $_SESSION['ttl'] = $ttl;
        $_SESSION['tl'] = $tl;
        $_SESSION['wn'] = $wn;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['email'] = $email;
        $_SESSION['pos'] = $pos;
        $_SESSION['nik'] = $nik;
        $_SESSION['phone'] = $phone;
        $_SESSION['loginCek'] = false;

        $moveFolder = "Photo/";
        $uploadFoto = move_uploaded_file($tempName, $moveFolder . $photoName);

        $_SESSION['photoLoc'] = $moveFolder . $photoName;

        pesan("Register Sukses");
        movePage("index.php");
    }
}
