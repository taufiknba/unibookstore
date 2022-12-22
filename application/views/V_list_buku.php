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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 -->
	</head>

	<?php
		$this->load->view('Navbar_view');
	?>

	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h1 align="center">List Data Book</h1><br />
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</div>
			<br />
			<div id="result"></div>

		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		<br />
		<br />
	</body>


	<script type="text/javascript" 
	src="<?php echo base_url('
	assets/jss/jquery.min.js');?>">
	</script>

	<!-- Aktifkan Bootstrap File-->

	<script type="text/javascript" 
	src="<?php echo base_url('
	assets/jss/bootstrap.min.js');?>">
	</script>



</html>


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