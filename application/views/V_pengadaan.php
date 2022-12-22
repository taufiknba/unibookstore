<!DOCTYPE html>

<html lang="en">

	<link href="<?php echo base_url('assets/img/logo.ico');?>"
	rel="shortcut icon">

<head>
	<meta charset="utf-8">
	<title>
		UNIBOOK STORE
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
	
			<h1><center>UNIBOOK STORE</center></h1>
			<h5><center>PAGE PENGADAAN BUKU</center></h5>

			<br>
			

			<table class="table table-striped">
				<thead>
					
		


					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Buku</th>
						<th scope="col">Penerbit Buku</th>	
						<th scope="col">Stok Buku</th>				
					</tr>
				</thead>

					
				<!-- Tampil Data-->
				<?php 
				$no=0;
				foreach ($hasil as $row):
				$no++;
				?>

					<tr>
						<th scope="row"> <?php echo $no;?> </th>
						<td> <?php echo $row->nama_buku;?> </td>
						<td> <?php echo $row->penerbit_buku;?> </td>
						<td> <?php echo $row->stok_buku;?> </td>
						
						
						
					

					</tr>
				<!-- Akhir baca data-->

				<?php endforeach;
				?>



			</table>


		<a href="<?php echo site_url
		('Menu');?>"
		class="btn btn-warning">Home
		</a>


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