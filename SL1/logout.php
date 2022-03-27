<?php
require_once "functions.php";
session_start();

session_destroy();

pesan("Logout success");
movePage("login.php");
