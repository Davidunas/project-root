<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Homepage</title>
    <link rel="shortcut icon" href="<?= base_url('assets/homepage/img/logogupi.png') ?>" sizes="16x16" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/homepage/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/homepage/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/homepage/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/homepage/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/homepage/css/Swipe-Slider-6.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: #1A1A1A;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#post_carousel" style="background-position: center;background-size: cover;background-repeat: no-repeat;color: white;"><img src="<?= base_url('assets/homepage/img/logogupi.png') ?>" width="40" height="40" class="d-inline-block align-top"><span class="navbar-brand mb-0 h1"> GUPISTAR </span></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#post_carousel">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#fmtt">Why Gupistar ?</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#footer">Support</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <?php if (Session('IsLogged') == true) : ?>
                        <li><a class="btn btn-warning btn-log" href="<?= base_url('user/profile_account') . '/' . Session()->get('id'); ?>">Profile</a></li>
                        <li> <a class="btn btn-warning btn-reg" type="button" href="<?= base_url('user/logout') ?>">Logout</a></li>
                    <?php else : ?>
                        <li><a class="btn btn-primary btn-log" href="<?= base_url('auth/index') ?>">Sign In</a></li>
                        <li> <a class="btn btn-primary btn-reg" type="button" href="<?= base_url('auth/index') ?>">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="post_carousel" class="carousel slide animate_text post_carousel_wrapper swipe_x ps_easeOutCirc" data-ride="carousel" data-duration="1000" data-interval="4000" data-pause="hover">

        <!--========= Indicators =========-->
        <ol class="carousel-indicators post_carousel_indicators">
            <li data-target="#post_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#post_carousel" data-slide-to="1"></li>
            <!-- <li data-target="#post_carousel" data-slide-to="2"></li> -->
        </ol>

        <!-- ========= Wrapper for slides  =========-->
        <div class="carousel-inner" role="listbox">

            <!--========= First slide =========-->
            <div class="carousel-item active">
                <img src="<?= base_url('assets/homepage/img/Welcoming.png') ?>" alt="post slide 01">
                <!-- <div class="carousel-caption post_carousel_caption">
                    <h1 data-animation="animated fadeInLeft">WE ARE AGENCY FOX</h1>
                    <h2 data-animation="animated fadeInRight">with beautiful animation</h2>
                </div> -->
            </div>

            <!--========= Second slide =========-->
            <div class="carousel-item">
                <img src="<?= base_url('assets/homepage/img/bannerfix.jpg') ?>" alt="post slide 02">
                <!-- <div class="carousel-caption post_carousel_caption">
                    <h1 data-animation="animated fadeInLeft">WE ARE AGENCY FOX</h1>
                    <h2 data-animation="animated fadeInRight">with beautiful animation</h2>
                </div> -->
            </div>

            <!--========= Third slide =========-->
        </div>
    </div>

    <div class="container py-5" id="fmtt">
        <br>
        <div class="row pb-5 mb-4">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="<?= base_url('assets/homepage/img/icon/friend.png') ?>" alt="" class="img-fluid d-block mx-auto mb-3 img-ico">
                        <h5><b>Friend</b></h5>
                        <p class="small text-muted">Meet your new friend and create your dream team</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="<?= base_url('assets/homepage/img/icon/money.png') ?>" alt="" class="img-fluid d-block mx-auto mb-3 img-ico">
                        <h5><b>Money</b></h5>
                        <p class="small text-muted">Playing game you can earn money together</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="<?= base_url('assets/homepage/img/icon/thropy.png') ?>" alt="" class="img-fluid d-block mx-auto mb-3 img-ico">
                        <h5><b>Trophy</b></h5>
                        <p class="small text-muted">Fight on tournament together and win the game</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="<?= base_url('assets/homepage/img/icon/thone.png') ?>" alt="" class="img-fluid d-block mx-auto mb-3 img-ico">
                        <h5><b>Thone</b></h5>
                        <p class="small text-muted">
                            There is only one real champions
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- masih kosong -->
    <div style="background:  #FFFF; ">
        <div class="row" style="margin-right:20px;">
            <div class="col-md-4" style="margin-left: 200px; margin-top:30px;">
                <h1 style=" color: black; "><b>Hello Gamers</b></h1>
                <p style=" color: black; ">
                    Introducing brand new social media platform
                    gupi star is here to meet the needs of gamers around the world and also those who want to show their best talents in the world of e-sports
                </p>
            </div>
            <div class="col-md-4">
                <!-- <iframe class="ktn-vid" style="margin-top:30px; margin- border-radius:5px;" width="100%" height="300px" src="https://www.youtube.com/watch?v=7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> -->
                <iframe width="560" height="315" class="ktn-vid" src="https://www.youtube.com/embed/7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- </iframe> -->
            </div>
        </div>
    </div>
    <h2 style="text-align:center; margin-top:150px;">WHAT'S NEXT</h2>
     <div style="background: #FFF; padding-top:100px; padding-bottom:100px; magic_quotes_runtime ">
        <div class="row" style="margin-right:20px;">
            <div class="col-md-4">
                    <!-- <iframe class="ktn-vid" style="margin-top:30px; margin- border-radius:5px;" width="100%" height="300px" src="https://www.youtube.com/watch?v=7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> -->
                    <iframe width="560" height="315" class="ktn-vid" style="margin-left:150px;" src="https://www.youtube.com/embed/7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- </iframe> -->
                </div>
                <div class="col-md-4" style="margin-left: 330px; margin-top:30px;">
                    <h1 style=" color: black; "><b>Hello Gamers</b></h1>
                    <p style=" color: black; ">
                        Introducing brand new social media platform
                        gupi star is here to meet the needs of gamers around the world and also those who want to show their best talents in the world of e-sports
                    </p>
                </div>
        </div>
    </div>
    <div style="background: #FFF; padding-top:50px; padding-bottom:100px; magic_quotes_runtime ">
        <div class="row">
            <div class="col-md-4" style="margin-left: 150px; margin-top:30px;">
                    <h1 style=" color: black; "><b>Hello Gamers</b></h1>
                    <p style=" color: black; ">
                        Introducing brand new social media platform
                        gupi star is here to meet the needs of gamers around the world and also those who want to show their best talents in the world of e-sports
                    </p>
            </div>
            <div class="col-md-4">
                    <!-- <iframe class="ktn-vid" style="margin-top:30px; margin- border-radius:5px;" width="100%" height="300px" src="https://www.youtube.com/watch?v=7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> -->
                    <iframe width="560" height="315" class="ktn-vid" style="margin-left: 130px;" src="https://www.youtube.com/embed/7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- </iframe> -->
            </div>  
        </div>
      </div>
    <div style="background: #FFF; padding-top:50px; padding-bottom:100px; magic_quotes_runtime ">
        <div class="row" style="margin-right:20px;">
             <div class="col-md-4">
                    <!-- <iframe class="ktn-vid" style="margin-top:30px; margin- border-radius:5px;" width="100%" height="300px" src="https://www.youtube.com/watch?v=7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> -->
                    <iframe width="560" height="315" class="ktn-vid" style="margin-left:150px;" src="https://www.youtube.com/embed/7X1uDzGyrc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- </iframe> -->
            </div>  
            <div class="col-md-4" style="margin-left: 330px; margin-top:30px;">
                    <h1 style=" color: black; "><b>Hello Gamers</b></h1>
                    <p style=" color: black; ">
                        Introducing brand new social media platform
                        gupi star is here to meet the needs of gamers around the world and also those who want to show their best talents in the world of e-sports
                    </p>
            </div>
        </div>
    </div>
    <div class="header-blue">
        <div class="container hero">
            <div class="row">
                <div class=" col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="iphone-mockup"><img class="img-fluid device" src="<?= base_url('assets/homepage/img/icon/iphone2.png') ?>"></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5" style="margin-top: -140px; margin-bottom: 40px;">
                    <h1><b>Download Apps To <br>Your Device</b></h1>
                    <p>Coming soon available on <br> Apps Store and Playstore</p>
                    <a class="btn-lg" href="#" style="background-position: center;background-size: cover;background-repeat: no-repeat;"><img src="<?= base_url('assets/homepage/img/playstore.png') ?>" width="150px" height="50px"></a>
                    <a class="btn-lg" href="#" style="background-position: center;background-size: cover;background-repeat: no-repeat;"><img src="<?= base_url('assets/homepage/img/appstore.png') ?>" width="150px" height="50px"></a>
                    <!-- <button class="btn btn-light btn-lg action-button" type="button">Learn
                        More</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="footer-dark" id="footer">
        <footer>
            <div class="container">
                <div class="row row-footer">
                    <div class="col-sm-6 col-md-4 item com-name">
                        <h3><img src="<?= base_url('assets/homepage/img/logogupi.png') ?>" width="50px" height="50px">Gupistar</h3>
                        <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, sed diam nonumy.</p>
                        <ul class="sosial-m ">
                            <li class="sc"><a href="https://instagram.com/gupistar?igshid=qfcmmvbq32gc"><i class="icon ion-social-instagram"></i></a></li>
                            <li class="sc"><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li class="sc"><a href="https://www.youtube.com/channel/UCz5arpyBRcabuzV6aOQDO2g"><i class="icon ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-2 item">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Benefit</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Legal</h3>
                        <ul>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Customer Support</h3>
                        <ul>
                            <li><span style="color: gray;">gupi@gmail.com</span></li>
                            <li><span style="color: gray;">Senin - Sabtu | 09:00 - 18:00</span></li>
                        </ul>
                    </div>
                    <!-- <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-instagram"></i></a></div> -->
                </div>
                <hr style="background: rgba(255, 255, 255, 0.2); margin-bottom: -10px;">
                <p class="copyright">Copyright 2021. All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <script src="<?= base_url('assets/homepage/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/homepage/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="<?= base_url('assets/homepage/js/Swipe-Slider-6.js') ?>"></script>
</body>

</html>