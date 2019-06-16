<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sisitem pengaduan </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>aset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<nav class="navbar navbar-light " style="background-color: purple">
  <a class="navbar-brand">
  	<div class="row">
  		<div class="col-md-3">  			
  			<img  style="position: absolute; bottom: -6px" width="70%" src="<?php echo base_url();?>aset/images/amikom.png">
  		</div>
  		<div class="col-md-9">
  			<h5 style="color: white">
		  		Sistem Pengaduan<br> Universitas Amikom Yogyakarta
		  	</h5>
  		</div>
  	</div>
  	
  </a>
  
</nav>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>aset/images/bg-01.jpg');">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<?php  
                    echo form_open('Welcome/login/'); 
                    ?>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="nim" placeholder="NIM">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<?php
					form_close();
					?>
				</div>
			</div>
		</div>
	</div>
	
	
<div style="height:10%; width:100%" class="text-center badge-light" >
  <div class="" style="padding-bottom:-6rem !important">	



    <p class="lead " style="color:black">Copyright © 2019<br>

UNIVERSITAS AMIKOM YOGYAKARTA<br>

All Right Reserved</p>

  </div>
</div>

	<div id="dropDownSelect1"></div>	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>aset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>aset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>aset/js/main.js"></script>

</body>
</html>