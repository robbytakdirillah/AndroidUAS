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
			<center><h3>KAMI <small>Survey Kepuasan Layanan Pendidikan</small></h3></center>
		</div>

		<div data-role="main" class="ui-content">
			<form method="post" action="kontrol/pros-mhs.php" data-ajax="false">
			
			 
			<label for="nim">NIM : <span>*</span></label>
			<input type="text" name="nim" id="nim" placeholder="NIM...">
			
			<label for="nama">Nama: <span>*</span></label>
            <input type="text" id="nama" name="nama" placeholder="Nama..."/>
            
            <label for="jur">Jurusan: <span>*</span></label>
            <select id="jur" name="jur">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
            </select>
            <!-- <input type="text" id="jur" name="jur" placeholder="Jurusan..."/> -->
            
            <label for="tgl">Tanggal: <span>*</span></label>
			<input type="date" id="tgl" name="tgl" placeholder="tgl..."/>
			
			<button type="submit" name="submit">Lanjut Isi Kuisioner</button>
			<!-- <input type="submit" name="submit" data-inline="true" value="Isi Kuisioner" data-theme="b"> -->
			</form>
			</div>
		
	</div>
</body>
</html>