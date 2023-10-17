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
			<div class="card-header bg-success text-white ">
				Edit Barang
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from tbarang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Kode Barang</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="kode" required="" class="form-control" value="<?= $row['kode']; ?>">
						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>">
					</div>
					<div class="form-group">
						<label>Merk</label>
						<input type="text" name="merk" class="form-control" value="<?= $row['merk']; ?>">
					</div>
					<div class="form-group">
						<label>Type</label>
						<input type="text" name="type" class="form-control" value="<?= $row['type']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['kode'];
					$nama = $_POST['nama'];
					$nama = $_POST['merk'];
					$nama = $_POST['type'];
					$harga = $_POST['harga'];

					//query mengubah barang
					mysqli_query($koneksi, "update barang set kode='$kode', nama='$nama', merk='$merk', type='$type', harga='$harga' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>