<?php
session_start();

unset($_SESSION['email']);

$_SESSION = [];

session_destroy();
header("Location: user-login.php");