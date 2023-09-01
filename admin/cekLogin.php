<?php

session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

var_dump($username);

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("Location: index.php");
} else {
    header("Location: login.php");
}
