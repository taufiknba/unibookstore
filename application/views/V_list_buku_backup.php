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
		<div class="container" id="result">
	
			<h1><center>UNIBOOK STORE</center></h1>
			<h4><center>LIST BOOK</h4></center>

			<br>
			<BR>

			<div class="row-mt-3">
				<div class="col-md-6">
					<form action="" method="post">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Cari Buku.." name="search_text"
						  id="search_text">
						  <button class="btn btn-primary" type="submit">Cari</button>
						</div>
					</form>
				</div>
			</div>


			<table class="table table-striped">
				<thead>
					
				


					<tr>
					<th scope="col">No</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Kategori Buku</th>
						<th scope="col">Nama Buku</th>
						<th scope="col">Harga Buku</th>
						<th scope="col">Stok Buku</th>
						<th scope="col">Penerbit Buku</th>
						
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


	<script>
	$(document).ready(function(){

		load_data();

		function load_data(query)
		{
			$.ajax({
				url:"<?php echo base_url(); ?>ajaxsearch/fetch",
				method:"POST",
				data:{query:query},
				success:function(data){
					$('#result').html(data);
				}
			})
		}

		$('#search_text').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
				load_data(search);
			}
			else
			{
				load_data();
			}
		});
	});
	</script>


</body>

</html>