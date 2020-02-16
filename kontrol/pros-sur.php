<?php
include_once("../konfig/koneksi.php");

if(isset($_POST['nim']))
{
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $sarana = $_POST['sarana'];
    $lab= $_POST['lab'];
    $perpus= $_POST['perpus'];
    $dosen= $_POST['dosen'];
    $materi= $_POST['materi'];

    $result = mysqli_query($koneksi, "UPDATE kuisioner 
    SET kelas='$kelas', sarana='$sarana', lab='$lab', perpus='$perpus', dosen='$dosen', materi='$materi' 
    WHERE nim=$nim");
    // $result = mysqli_query($koneksi, "INSERT INTO  kuisioner(kelas, sarana, lab, perpus, dosen, materi) VALUES('$kelas','$sarana','$lab','$perpus', '$dosen', '$materi) WHERE nim=$nim");

    header("Location: ../data.php");
    // echo "Berhasil";
}
?>