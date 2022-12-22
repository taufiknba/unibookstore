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
			<h4><center>LIST BOOK</h4></center>

			<br>
			<BR>
			<table class="table table-striped">
				<thead>
					
				


					<tr>
					<th scope="col">No</th>
						<th scope="col">ID Penerbit</th>
						<th scope="col">Nama Penerbit</th>
						<th scope="col">Alamat Penerbit</th>
						<th scope="col">Kota</th>
						<th scope="col">Telepon</th>
						
						
					</tr>
				</thead>

					
				<!-- Tampil Data-->
				<?php 
				$no=0;
				foreach ($tb_penerbit->result() as $row):
				$no++;
				?>

					<tr>
					<th scope="row"> <?php echo $no;?> </th>
						<td> <?php echo $row->id_penerbit;?> </td>
						<td> <?php echo $row->nama_penerbit;?> </td>
						<td> <?php echo $row->alamat_penerbit;?> </td>
						<td> <?php echo $row->kota_penerbit;?> </td>
						<td> <?php echo $row->telepon_penerbit;?> </td>
						
						
						
						
					

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