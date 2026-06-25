<?php 
session_start();
include ("/var/www/html/dbcalls/conn.php");

$sql = "SELECT * FROM users WHERE userrole = :userrole";

if (!isset($_SESSION['userrole']) || $_SESSION['userrole'] !== 'admin'){
    header('location: ../../pages/login-register.php');
}