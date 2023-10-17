<!DOCTYPE html>
<html>

<head>
	<title>GILACODING</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Barang
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Kode Barang</label>
						<input type="text" name="kode" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Merk</label>
						<input type="text" name="merk" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Type</label>
						<input type="text" name="type" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Barang</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['kode'];
					$nama = $_POST['nama'];
					$nama = $_POST['merk'];
					$nama = $_POST['type'];
					$harga = $_POST['harga'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into tbarang (kode,nama,merk,type,harga)values('$kode', '$nama', '$merk', '$type', '$harga')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>