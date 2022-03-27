<?php
function pesan($message)
{
    echo "<script type='text/javascript'>alert('$message');</script>";
}

function movePage($page)
{
    echo "<script type='text/javascript'>window.location.replace('$page');</script>";
}

function cekDaftar()
{
    if ((isset($_SESSION['usernameSession']) == null) && (isset($_SESSION['passSession']) == null)) {
        return true;
    }
    return false;
}

function cekLogin($uname, $pass){
    if(($uname == isset($_SESSION['usernameSession'])) && ($pass == isset($_SESSION['passSession']))){
        return true;
    }
    return false;
}
