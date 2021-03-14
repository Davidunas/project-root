<?php

use CodeIgniter\Session\Session;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile Account</title>
    <script src="https://kit.fontawesome.com/9447237149.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/user/profile_account/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/profile_account/css/prof.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/homepage/img/logogupi.png') ?>" sizes="16x16" type="image/x-icon">
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
                        <div class="col-md-2"></div>
                        <div class="container col-lg-8">
                            <div class="row" style="margin-top: -50px; margin-bottom:20px;">
                                <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 profile-header">
                                            <h2>Form Edit Profile</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="ats">
								<div class="ata">
									<label style="margin-top: 5px;">ID : 18312</label>
								</div>
							</div> -->

                            <div class="row user-detail">
                                <div class="col">
                                    <form action="<?= base_url('user/update_profile_account') . '/' . $user['id'] ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                        <input type="hidden" name="gambarLama" value="<?= $user['image']; ?>">
                                        <div class="mb-3 mt-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> text-center" id="email" name="email" aria-describedby="emailHelp" value="<?= $user['email']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('email'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?> text-center" id="phone" name="phone" aria-describedby="emailHelp" value="<?= $user['phone']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('phone'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Fullname" class="form-label">Fullname</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?> text-center" id="fullname" name="fullname" aria-describedby="emailHelp" value="<?= $user['fullname']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('fullname'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('age')) ? 'is-invalid' : ''; ?> text-center" id="age" name="age" aria-describedby="emailHelp" value="<?= $user['age']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('age'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="form-group col-md-3" style="margin-left: 15px; margin-right: -10px;">
                                                <label for="age" class="form-label">Date</label>
                                                <input type="number" name="tanggal" value="<?= $date; ?>" placeholder="Day" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?> btn-date text-center">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('date'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="age" class="form-label">Month</label>
                                                <input type="number" name="bulan" value="<?= $month; ?>" placeholder="Month" class="form-control <?= ($validation->hasError('month')) ? 'is-invalid' : ''; ?> btn-date bln text-center">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('month'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="age" class="form-label">Year</label>
                                                <input type="number" name="tahun" value="<?= $year; ?>" placeholder="Year" class="form-control <?= ($validation->hasError('year')) ? 'is-invalid' : ''; ?> btn-date text-center">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('year'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- <label for="age" class="form-label" style="float:left;">Gender</label> -->
                                            <div class="form-row" style="margin-left: 30px;">
                                                <div class="form-group col-md-3">
                                                    <input type="radio" name="gender" style="width: 30px;" class="form-control <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?> text-center" <?= ($user['gender'] == 'Male') ? 'checked' : ''; ?> value="Male">
                                                    <label class="gender">Male</label>
                                                </div>
                                            </div>
                                            <div class="check" style="margin-left: -5px;">
                                                <div class="form-group col-md-3">
                                                    <input type="radio" name="gender" style="width: 30px; margin-left: 45px;" class="form-control <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?> text-center" <?= ($user['gender'] == 'Female') ? 'checked' : ''; ?> value="Female">
                                                    <label class="gender" style="margin-left: 45px;">Female</label>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('gender'); ?>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('city')) ? 'is-invalid' : ''; ?> text-center" id="city" name="city" aria-describedby="emailHelp" value="<?= $user['city']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('city'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="job" class="form-label">Job</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('job')) ? 'is-invalid' : ''; ?> text-center" id="job" name="job" aria-describedby="emailHelp" value="<?= $user['job']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('job'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="national" class="form-label">National</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('national')) ? 'is-invalid' : ''; ?> text-center" id="national" name="national" aria-describedby="emailHelp" value="<?= $user['national']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('national'); ?>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="gambar">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" aria-describedby="inputGroupFileAddon04" name="gambar" onchange="imgPreview()">
                                                        <label class=" custom-file-label" for="gambar">Choose file</label>
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('gambar'); ?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col" style="margin-top: 130px; margin-left: -40px;">
                                                    <img src="<?= base_url('img') . '/' . $user['image']; ?>" alt="" class="preview" style="width: 200px; height:200px;">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="mb-3 mt-5">
                                            <a href="<?= base_url('user/profile_account') . '/' . $user['id'] ?>" class="btn btn-warning">Back</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-2 sidekanan">

                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/user/profile_account/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/user/profile_account/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        function imgPreview() {
            const gambar = document.querySelector('#gambar');
            const gambarLabel = document.querySelector('.custom-file-label');
            const preview = document.querySelector('.preview');

            gambarLabel.textContent = gambar.files[0].name;
            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                preview.src = e.target.result;
            }
        }
    </script>
</body>

</html>