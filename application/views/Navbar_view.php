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

	<!-- fonts -->
	<link href="<?php echo base_url('assets/css/font-awesome.css');?>"
	rel="stylesheet">
</head>

<nav class="navbar navbar-expand navbar-dark
bg-success static-top">
	
	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">


		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('Menu');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-book"></i>
				Dashboard
			</a>
		</li>


		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('C_list_buku');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-folder"></i>
				Home
			</a>
		</li>



		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('C_buku');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user"></i>
				Admin
			</a>
		</li>


		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('C_pengadaan');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-pencil"></i>
				Pengadaan Buku
			</a>
		</li>

		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('C_penerbit');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-folder"></i>
				List Penerbit
			</a>
		</li>

	<!--	
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('Petugas');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-book"></i>
				Data Petugas
			</a>
		</li>
	-->



	<!--
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link textbox-toggle"
			href="<?php echo base_url('Invoice');?>"
			id="userDropdown" role="button" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user"></i>
				Invoice
			</a>
		</li>
	-->


	</ul>
</nav>


<body>
	

</body>