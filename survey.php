<?php 
include_once('konfig/koneksi.php');
$result = mysqli_query($koneksi, "SELECT * FROM users WHERE id=$id");
while($data = mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $jur = $data['jurusan'];
    $tgl = $data['tgl'];
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAMI</title>
    <link rel="stylesheet" href="themes/aa.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />
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
                <h3>KAMI <small>Kuisioner</small></h3>
            </center>
        </div>

        <div data-role="main" class="ui-content">
            <form method="post" action="kontrol/pros-sur.php" data-ajax="false">
                <input type="hidden" name="nim" id="nim" value="<?= $_GET['nim'] ?>">
                <input type="hidden" name="nama" id="nama" value="<?= $nama ?>">
                <input type="hidden" name="jur" id="jur" value="<?= $jur ?>">
                <input type="hidden" name="tgl" id="tgl" value="<?= $tgl ?>">
                <label for="kelas">Ruang Kelas : <span>*</span></label>
                <select id="kelas" name="kelas">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="text" name="nim" id="nim" placeholder="NIM..."> -->

                <label for="sarana">Sarana belajar: <span>*</span></label>
                <select id="sarana" name="sarana">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="text" id="nama" name="nama" placeholder="Nama..."/> -->

                <label for="lab">Fasilitas Lab: <span>*</span></label>
                <select id="lab" name="lab">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="text" id="jur" name="jur" placeholder="Jurusan..."/> -->

                <label for="perpus">Perpustakaan: <span>*</span></label>
                <select id="perpus" name="perpus">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="date" id="tgl" name="tgl" placeholder="tgl..."/> -->

                <label for="dosen">Kualitas Dosen: <span>*</span></label>
                <select id="dosen" name="dosen">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="date" id="tgl" name="tgl" placeholder="tgl..."/> -->

                <label for="materi">Kualitas Materi: <span>*</span></label>
                <select id="materi" name="materi">
                    <option value="">--Pilih Tingkat Kepuasan--</option>
                    <option value="Tidak Memuaskan">1. Tidak Memuaskan</option>
                    <option value="Kurang Memuaskan">2. Kurang Memuaskan</option>
                    <option value="Cukup Memuaskan">3. Cukup Memuaskan</option>
                    <option value="Memuaskan">4. Memuaskan</option>
                    <option value="Sangat Memuaskan">5. Sangat Memuaskan</option>
                </select>
                <!-- <input type="date" id="tgl" name="tgl" placeholder="tgl..."/> -->

                <button type="submit" name="submit">Simpan</button>
                <!-- <input type="submit" name="submit" data-inline="true" value="Simpan" data-theme="b"> -->
            </form>
        </div>

    </div>
</body>
</html>