<?php
session_start();
require_once "functions.php";

if (isset($_POST['submit'])) {
    if (cekLogin($_POST['username'], $_POST['pass'])) {
        // pesan("sukses");
        $_SESSION['loginCek'] = true;
        movePage("home.php");
    } else {
        pesan("wrong username or password");
        movePage("login.php");
    }
}
