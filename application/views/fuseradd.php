<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/main.css">
<!--===============================================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

        <?php if(!empty($flashdata)) {echo $flashdata;} ?>


				<form class="login100-form validate-form" method="POST" name="frm" action="<?php echo base_url()?>home/adduser">
					<span class="login100-form-title p-b-49">
						Buat Akun Baru
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama harus diisi !!">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" placeholder="Masukan Nama Lengkap" id="nama" name="nama">

						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Username harus diisi !!">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" placeholder="Masukan Username Baru" id="user" name="user">

						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" placeholder="Masukan Password Baru" id="pass" name="pass">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br>
					<br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Buat Akun
							</button>
						</div>
            </div>
            <br>
            <br>

            <div class="text-right p-t-8 p-b-31">Sudah punya akun? <br>
              <a href="<?php echo base_url();?>home/user_login">
              LOGIN</a>

					</div>

					</div>
				</form>
			</div>
		</div>
