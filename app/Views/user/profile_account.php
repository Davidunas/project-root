<?php

use CodeIgniter\Session\Session;
?>
<!DOCTYPE html>
<html>

<head>
	<title>Profile Account</title>
	<script src="https://kit.fontawesome.com/9447237149.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="<?= base_url('assets/homepage/img/logogupi.png') ?>" sizes="16x16" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('assets/user/profile_account/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/user/profile_account/css/prof.css') ?>">
</head>

<body>
	<div class="container-full">
		<!-- <nav class="navbar navbar-expand-lg " style="background-color: #000000">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"></button>
			  <a class="navbar-brand" href="#" style="color: white; margin-top: 10px;" ><img src="guppi-logo.jpeg" width="80" height="50">&nbsp; GUPI STAR</a>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active" style="margin-left: -100px; position: relative;">
			        <a class="nav-link" href="#" style="color: white; font-size: 20px;">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" style="color: white; font-size: 20px;">Timeline</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" style="color: white; font-size: 20px;">Friends</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" style="color: white; font-size: 20px;">Bounty</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" style="color: white; font-size: 20px;">Profile</a>
			      </li>
			    </ul>
					<form class="form-inline my-2 my-lg-0">
							<div class="tombol-logout" style="background: #f7f1e3; border-radius:10px; height: 35px; ">
							<a href="#" style="text-decoration: none; color:#2C3A47; font-size: 20px;">&nbsp;<img src="log2.png" width="30" height="20">&nbsp; Logout &nbsp; </a>
							</div>
					</form>
			  </div>
			</nav> -->

		<nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: #1A1A1A;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#" style="background-position: center;background-size: cover;background-repeat: no-repeat;color: white;"><img src="<?= base_url('assets/user/profile_account/Gupi Star V 1.0.png') ?>" width="50" height="50" class="d-inline-block align-top"><span class="navbar-brand mb-0 h1" style="margin-top: 10px; margin-left: 0px;"> GUPISTAR </span></a>
				<!-- <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
							navigation</span><span class="navbar-toggler-icon"></span></button> -->
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav">
						<li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('/homepage') ?>">Home</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Friends</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Bounty</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#">Profile</a></li>
					</ul>

				</div>
			</div>
		</nav>

		<div class="container-fluid con-all">
			<div class="row" style="margin-left: -40px;">
				<div class="col-md-2 sidekiri">
					<nav id="sidebar">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" style="color: white;" href="#">My Account</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">My Role</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Winner Bounty</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Setting</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('user/logout') ?>">Logout</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-md-8 konten">
					<div class="row">
						<div class="container col-lg-12">
							<div class="row">
								<div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
									<div class="row">
										<div class="col-lg-12 col-sm-12 col-12 profile-header">
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="ats">
								<div class="ata">
									<label style="margin-top: 5px;">ID : 18312</label>
								</div>
							</div> -->
							<div class="row btnn " style=" padding: 10px; ">
								<div class="btn">
									<a href="<?= base_url('user/edit_profile_account') . '/' . $user['id'] ?>"><button>Edit</button></a>
								</div>
							</div>
							<div class="row user-detail">
								<div class="col-lg-6 col-sm-6 col-6 menukiri">
									<img src="<?= base_url('img') . '/' . $user['image'] ?>" class="rounded-circle img-thumbnail">
									<div style="margin-top: 30px;" class="kiri">
										<label>Username : </label>
										<p><?= $user['username']; ?></p>
									</div>
									<hr style="margin-top:-5px;" width="220px">
									<div class="kiri">
										<label>Email : </label>
										<p><?= $user['email']; ?></p>
									</div>
									<hr style="margin-top:-5px;" width="220px">
									<div class="kiri">
										<label>Phone: </label>
										<p><?= $user['phone']; ?></p>
									</div>
									<!-- <hr style="margin-top:-5px;" width="220px"> -->
								</div>
								<div class=" col-sm-6 col-6 menukanan">
									<div>
										<label>Created At</label>
										<p><?= $user['created_at']; ?></p>
									</div>
									<hr style="margin-top:-5px;" width="220px">
									<div>
										<label>ID</label>
										<p><?= $user['id_user']; ?></p>
									</div>
									<hr style="margin-top:-5px;" width="220px">
								</div>
								<form action="#" class="size-form">
									<div class="row">
										<div class="col-md-6" style="margin-left: 15px;">
											<input type="text" name="nama_lengkap" value="<?= $user['fullname']; ?>" class="form-control btn-name" placeholder="Fullname" readonly>
										</div><br><br>
									</div>
									<div class="row">
										<div class="col-md-3" style="margin-left: 15px;">
											<input type="text" name="age" value="<?= $user['age']; ?>" class="form-control" placeholder="Age" readonly>
										</div><br><br>
									</div>
									<div class="form-row">
										<div class="form-group col-md-2" style="margin-left: 15px; margin-right: -10px;">
											<input type="text" name="tanggal" value="<?= $date; ?>" placeholder="Day" class="form-control btn-date" readonly>
										</div>
										<div class="form-group col-md-2">
											<input type="text" name="bulan" value="<?= $month; ?>" placeholder="Month" class="form-control btn-date bln" readonly>
										</div>
										<div class="form-group col-md-2">
											<input type="text" name="tahun" value="<?= $year; ?>" placeholder="Year" class="form-control btn-date" readonly>
										</div>
										<!-- <div class="row" style="margin-left: 10px;">
											
										</div> -->
										<div class="row">
											<div class="form-row" style="margin-left: 30px;">
												<div class="form-group col-md-3">
													<input type="radio" name="gender" style="width: 30px;" class="form-control" <?= ($user['gender'] == 'Male') ? 'checked' : 'disabled'; ?>>
													<label class="jk">Male</label>
												</div>
											</div>
											<div class="form-row" style="margin-left: -5px;">
												<div class="form-group col-md-3">
													<input type="radio" name="gender" style="width: 30px; margin-left: 45px;" class="form-control" <?= ($user['gender'] == 'Female') ? 'checked' : 'disabled'; ?>>
													<label class="jk" style="margin-left: 45px;">Female</label>
												</div>
											</div>

											<div class="">
												<div class="row">
													<div class="col-md-6 row-alm">
														<!-- <div class="col-md-4"></div>
													<div class="col-md-6"></div>
													<div class="col-md-6"></div> -->

														<input type="text text2" name="region" style="width: 395px;  margin-bottom: 10px;" class="form-control btn-alm" placeholder="Region" readonly>
														<input type="text text2" value="<?= $user['job']; ?>" name="job" style="width: 395px; margin-bottom: 10px;" class="form-control btn-alm" placeholder="Job" readonly>
														<input type="text text2" name="nationality" value="<?= $user['national']; ?>" style="width: 395px; margin-bottom: 10px;" class="form-control btn-alm" placeholder="Nationality" readonly>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 sidekanan">

				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/user/profile_account/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/user/profile_account/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>