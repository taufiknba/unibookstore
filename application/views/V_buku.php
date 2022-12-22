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
			<h4><center>PAGE ADMIN</center></h4>

			<BR>
			

			<table class="table table-striped">
				<thead>
					
				<a href="<?php echo site_url
				('C_buku/Add_buku');?>"
				class="btn btn-primary">Add
				</a>

				

					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Kategori Buku</th>
						<th scope="col">Nama Buku</th>
						<th scope="col">Harga Buku</th>
						<th scope="col">Stok Buku</th>
						<th scope="col">Penerbit Buku</th>
						<th width="200">Action</th>
					</tr>
				</thead>

					
				<!-- Tampil Data-->
				<?php 
				$no=0;
				foreach ($tb_buku->result() as $row):
				$no++;
				?>

					<tr>
						<th scope="row"> <?php echo $no;?> </th>
						<td> <?php echo $row->id_buku;?> </td>
						<td> <?php echo $row->kategori_buku;?> </td>
						<td> <?php echo $row->nama_buku;?> </td>
						<td> <?php echo number_format( $row->harga_buku);?> </td>
						<td> <?php echo $row->stok_buku;?> </td>
						<td> <?php echo $row->penerbit_buku;?> </td>
						
						
						<td>
						<a href="<?php echo site_url
						('C_buku/Edit_buku/'.$row->id_buku);?>"
						class="btn btn-success">Update
						</a>

						<a href="<?php echo site_url
						('C_buku/Delete_buku/'.$row->id_buku);?>"
						class="btn btn-danger">Delete
						</a>
						</td>
					

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