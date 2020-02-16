<?php
    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jur = $_POST['jur'];
        $tgl = $_POST['tgl'];

        include_once("../konfig/koneksi.php");

        $result = mysqli_query($koneksi, "INSERT INTO kuisioner(nim, nama, jurusan, tgl) VALUES('$nim','$nama','$jur','$tgl')");

        // echo "Berhasil ditambah. <a href='index.php'>Lihat</a>";
        // echo "<a href='../survey.php?nim=$nim'>Lihat</a>";
        header("Location: ../survey.php?nim=$nim");
    }
?>