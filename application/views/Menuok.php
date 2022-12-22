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

    <?php
        $this->load->view('Navbar_view');
    ?>

<body>
    

    <style type="text/css">

        footer{
        font-family: 'Libre Franklin', sans-serif;
        background-color: white;
        color: black;
        }

        </style>


    
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"> WELCOME TO UNIBOOK STORE</h1>
                                    </div>
                                    
                                    <hr>
                                    
                                    <div class="thumbnail">
                <a href="assets/img/unibookstore.jpg" target="blank">
                <img src="assets/img/unibookstore.jpg" alt="barang" style="width: 100%;">
                </a>
            </div>

            <br>
            <hr>
            <center><p>Create by : Taufik</p>
                <p>200441050004</p>
            </center>

            <hr>

             <p align="right">Copyright <?php echo date('Y')?>  </p>
             

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   

    
</body>