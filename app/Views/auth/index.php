<!DOCTYPE html>
<html>

<head>
    <title>Login & Registration Form </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/login/style.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <style>
        .img:before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            width: 900px;
            height: 100%;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
            background: url(<?= base_url('/assets/login/background.jpg') ?>);
        }
    </style>
</head>

<body>
    <!-- Create Div Second For Signup Form-->

    <div id="first">
        <form action="<?= base_url('Auth/login') ?>" method="POST">
            <?= csrf_field(); ?>
            <center>
                <img src="<?= base_url() ?>/assets/login/Gupi Star V 1.0.png" alt="" srcset="" width="100px" height="100px" class="img-fluid">
                <h4 class="h4-text">Sign in to the site</h4>
                <?php if (session()->getFlashdata('pesan_login')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan_login'); ?>
                    </div>
                <?php endif; ?>
                <div class="form-group col-md-12">
                    <input type="Email" name="email_login" class="form-control control-signup <?= ($validation->hasError('email_login')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" value="<?= old('email_login'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email_login'); ?>
                    </div>
                </div>
                <br>
                <div class="form-group col-md-12">
                    <input type="password" class="form-control control-signup <?= ($validation->hasError('password_login')) ? 'is-invalid' : ''; ?>" id="password_login1" name="password_login" placeholder="Password" value="<?= old('password_login'); ?>">
                    <input type="checkbox" class="form-checkbox checkbox4" onclick="ShowPassword()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password_login'); ?>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-submit btn-danger col-md-12">Login</button>
                <br>
                <!-- <a href="" style="color:white;">
                    <p style="margin-top:10px;">Forgot Password?</p>
                </a> -->
                <br>
                <p id="two">Don't have account? <a class="signup" href="#" id="signup" style="text-decoration: none;">Sign up here</a></p>
            </center>
        </form>
    </div>

    <div id="second">
        <form action="<?= base_url('auth/register') ?>" method="POST">
            <?= csrf_field(); ?>
            <center>
                <img src="<?= base_url() ?>/assets/login/Gupi Star V 1.0.png" alt="" srcset="" width="100px" height="100px" class="img-fluid">
                <h4 class="h4-text">Create new account</h4>
                <div class="form-group">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <input type="Email" name="email" class="form-control control-signin <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="username" class="form-control control-signin <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" placeholder="Username" value="<?= old('username'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="number" name="phone" class="form-control control-signin <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" id="phonenumber" placeholder="Phone Number" value="<?= old('phone'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('phone'); ?>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control control-signin <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password3" name="password" placeholder="Password" value="<?= old('password'); ?>">
                    <input type="checkbox" class="form-checkbox checkbox5" onclick="ShowPassword1()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control control-signin <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password4" name="password2" placeholder="Password Confirm" value="<?= old('password_confirm'); ?>">
                    <input type="checkbox" class="form-checkbox checkbox6" onclick="ShowPassword2()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password2'); ?>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-submit btn-danger col-md-10">Register</button>
                <br>
                <br>
                <p id="two">Have an account? <a class="signin" href="#" id="signin" style="text-decoration: none;">Sign in</a></p>
            </center>
        </form>
    </div>

    <!-- BAGIAN 2 LIHAT SECARA TELITI ADA DUA FORM LOGIN DAN REGISTER MASING-MASING 2 -->
    <div class="cont">
        <div class="form sign-in">
            <form action="<?= base_url('Auth/login') ?>" method="POST">
                <?= csrf_field(); ?>
                <center>
                    <img src="<?= base_url() ?>/assets/login/Gupi Star V 1.0.png" alt="" srcset="" width="100px" height="100px" class="img-fluid">
                    <h4 class="h4-text">Sign in to the site</h4>
                    <?php if (session()->getFlashdata('pesan_login')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan_login'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group col-md-12">
                        <input type="Email" name="email_login" class="form-control control-signup <?= ($validation->hasError('email_login')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" value="<?= old('email_login'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email_login'); ?>
                        </div>
                    </div>
                    <br>
                    <div class="form-group col-md-12">
                        <input type="password" class="password_login form-control control-signup <?= ($validation->hasError('password_login')) ? 'is-invalid' : ''; ?>" id="password_login" name="password_login" placeholder="Password" value="<?= old('password_login'); ?>">
                        <input type="checkbox" class="form-checkbox checkbox1">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password_login'); ?>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-submit btn-danger col-md-12">Login</button>
                    <br>
                    <!-- <a href="" style="color:white;">
                        <p style="margin-top:10px;">Forgot Password?</p>
                    </a> -->
                    <!-- <p class="p-text">Dont have an account ? <b><a href="" class="btn-form">Sign up</a></b></p> -->
                </center>
            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>Welcome back to Gupistart.com?</h2>
                    <hr class="garis" width="217px">
                    <p>Sign in to continue to your account</p>
                    <br>
                    <p>Don’t have an account?</p>
                </div>
                <div class="img-text m-in">
                    <h2>Let's join with Gupistart.com</h2>
                    <hr class="garis" width="217px">
                    <p>Please fill out the following fields to create an account</p>
                    <br><br>
                    <p>Have an account?</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>

            <div class="form sign-up">
                <form action="<?= base_url('auth/register') ?>" method="POST">
                    <?= csrf_field(); ?>
                    <center>
                        <img src="<?= base_url() ?>/assets/login/Gupi Star V 1.0.png" alt="" srcset="" width="100px" height="100px" class="img-fluid">
                        <h4 class="h4-text">Create new account</h4>
                        <div class="form-group">
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <input type="Email" name="email" class="form-control control-signin <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control control-signin <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" placeholder="Username" value="<?= old('username'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control control-signin <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" id="phonenumber" placeholder="Phone Number" value="<?= old('phone'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('phone'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control control-signin <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password" value="<?= old('password'); ?>">
                            <input type="checkbox" class="form-checkbox checkbox2">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <br>
                        ` <div class="form-group">
                            <input type="password" class="form-control control-signin <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2" name="password2" placeholder="Password Confirm" value="<?= old('password_confirm'); ?>">
                            <input type="checkbox" class="form-checkbox checkbox3">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password2'); ?>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-submit btn-danger col-md-10">Register</button>
                        <!-- <p class="p-text">Have an account ? <b><a  href="" class="btn-form">Sign in</a></b></p> -->
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url() ?>/assets/login/script.js"></script>
</body>

</html>