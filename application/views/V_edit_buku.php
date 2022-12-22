<!DOCTYPE html>

<html lang="en">

	<link href="<?php echo base_url('assets/img/logo.ico');?>"
	rel="shortcut icon">

<head>
	<meta charset="utf-8">
	<title>
		Edit Buku
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
	
			<h1><center>Edit Buku</center></h1>
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo site_url
				('C_buku/update');?>" method="post">
	
				<!-- Grup Komponen Form-->
				

				<div class="form-group">
					<label>ID Buku</label>
					<input type="type" class="form-control"
					name="id_buku" value="<?php echo $id_buku;?>" 
					readonly>
				</div>		

				<div class="form-group">
					<label>Kategori Buku</label>
					<input type="type" class="form-control"
					name="kategori_buku" value="<?php echo $kategori_buku;?>" 
					placeholder="Kategori Buku">
				</div>				

				
				<div class="form-group">
					<label>Nama Buku</label>
					<input type="type" class="form-control"
					name="nama_buku" value="<?php echo $nama_buku;?>" 
					placeholder="Nama Buku">
				</div>				

				<div class="form-group">
					<label>Harga Buku</label>
					<input type="type" class="form-control"
					name="harga_buku" value="<?php echo $harga_buku;?>"
					placeholder="Harga Buku">
				</div>

				<div class="form-group">
					<label>Stok Buku</label>
					<input type="type" class="form-control"
					name="stok_buku" value="<?php echo $stok_buku;?>" 
					placeholder="Stok Buku">
				</div>		

				<div class="form-group">
					<label>Penerbit Buku</label>
					<input type="type" class="form-control"
					name="penerbit_buku" value="<?php echo $penerbit_buku;?>" 
					placeholder="Penerbit Buku">
				</div>		



				<input type="hidden" name="id_buku"
				value="<?php echo $id_buku;?>">

<br>
				<button type="submit"
				class="btn btn-primary">Submit
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