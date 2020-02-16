<?php

session_start();

include('../konfig/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password' AND user_level='admin'";
$result = mysqli_query($koneksi, $sql);
$rowcount = mysqli_num_rows($result);

if($rowcount>0){
    $_SESSION['username'] = $username;
    header("Location: ../mhs.php");
} else {
    echo '<h1>Username atau Kata Sandi Salah!</h1>';
    echo '<a href="../index.php">Kembali</a>';
}

?>
