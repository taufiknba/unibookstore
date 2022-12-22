<!DOCTYPE html>

<html lang="en">

	<link href="<?php echo base_url('assets/img/logo.ico');?>"
	rel="shortcut icon">

<head>
	<meta charset="utf-8">
	<title>
		Tambah Buku
	</title>

<!-- load bootsrap -->
	<link href="<?php echo base_url('
	assets/css/bootstrap.min.css');?>"
	rel="stylesheet">
</head>

	<?php
		$this->load->view('Navbar_view');
	?>


<body>
	<div>
		<div class="container">
	
			<h1><center>Tambah Buku</center></h1>
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo site_url
				('C_buku/simpan');?>" method="post">
	

				<div class="form-group">
					<label>ID Buku</label>
					<input type="type" class="form-control"
					name="id_buku" placeholder="Silahkan Masukkan ID Buku.." 
					>
				</div>

				<!-- Grup Komponen Form-->
				
				<div class="form-group">
					<label>Kategori Buku</label>
					<input type="type" class="form-control"
					name="kategori_buku" placeholder="Silahkan Masukkan Kategori Buku.."
					required="kategori_buku">
				</div>	
				
				<div class="form-group">
					<label>Nama Buku</label>
					<input type="type" class="form-control"
					name="nama_buku" placeholder="Silahkan Masukkan Nama Buku.."
					required="nama_buku">
				</div>				


				<div class="form-group">
					<label>Harga Buku</label>
					<input type="type" class="form-control"
					name="harga_buku" placeholder="Silahkan Masukkan Harga Buku.."
					required="harga_buku">
				</div>

				<div class="form-group">
					<label>Stok Buku</label>
					<input type="type" class="form-control"
					name="stok_buku" placeholder="Silahkan Masukkan Stok Buku.."
					required="stok_buku">
				</div>

				<div class="form-group">
					<label>Penerbit Buku</label>
					<input type="type" class="form-control"
					name="penerbit_buku" placeholder="Silahkan Masukkan Penerbit Buku.."
					required="penerbit_buku">
				</div>


<br>
				<button type="submit"
				class="btn btn-success">Submit
				</button>


				<a href="<?php echo site_url
				('C_buku');?>"
				class="btn btn-warning"
				onclick="return confirm('Apakah Anda Ingin Kembali?')">Back
				</a>

				</form>
			</div>


		</div>
	</div>

	<!-- Aktifkan JS File-->

	<script type="text/javascript" 
	src="<?php echo base_url('
	assets/jss/jquery.min.js');?>">
	</script>

	<!-- Aktifkan Bootstrap File-->

	<script type="text/javascript" 
	src="<?php echo base_url('
	assets/jss/bootstrap.min.js');?>">
	</script>

</body>

</html>