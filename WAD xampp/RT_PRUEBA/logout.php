<?php
session_start();

unset($_SESSION['user']);
setcookie('user', "", time() - 3600);
unset($_COOKIE['user']); 
header ("Location: login.php");