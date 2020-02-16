<?php
include_once("konfig/koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM kuisioner ORDER BY nim DESC");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAMI</title>
    <link rel="stylesheet" href="themes/aa.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />
    <link rel="stylesheet" href="themes/bootstrap.min.css">
    <script src="themes/jquery-1.11.1.min.js"></script>
    <script src="themes/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
    <div data-role="page" data-theme="a">
        <div data-role="header" data-position="inline">
            <h1>KAMI</h1>
        </div>
        <div data-role="content" data-theme="a">
            <center>
                <h3>KAMI <small>Kampus Sukabumi</small></h3>
                <a class="button" href="index.php">Keluar</a>
            </center>
        </div>

        <div data-role="main" class="ui-content">
            <table class="table table-responsive">
                <tr>
                    <th>Nama</th>
                    <th>Ruang Kelas</th>
                    <th>Sarana Belajar</th>
                    <th>Fasilitas Lab</th>
                    <th>Perpustakaan</th>
                    <th>Kualitas Dosen</th>
                    <th>Kualitas Materi</th>
                </tr>
                <?php
    while($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "<td>".$data['sarana']."</td>";
        echo "<td>".$data['lab']."</td>";
        echo "<td>".$data['perpus']."</td>";
        echo "<td>".$data['dosen']."</td>";
        echo "<td>".$data['materi']."</td>";
        // echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='hapus.php?id=$data[id]'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
            </table>
        </div>

    </div>
</body>

</html>