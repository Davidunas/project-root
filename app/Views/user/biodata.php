<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/user/test.css') ?>">
    <script src="https://kit.fontawesome.com/9447237149.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>Finish Account Setup</header>
        <p class="text-sub">Please complete your account setup</p>
        <div class="prog-bar">
            <div class="step">
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa fa-check"></div>
            </div>
            <div class="step">
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa fa-check"></div>
            </div>
            <div class="step">
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa fa-check"></div>
            </div>
        </div>
        <div class="form-outher">
            <form action="/user/update_bio/<?= session()->get('id'); ?>" method="POST">
                <input type="hidden" name="id" value="<?= session()->get('id'); ?>">
                <div class="page slidepage">
                    <div class="col-md-12">
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                    </div><br>
                    <div class="col-sm-7">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div><br>
                    <div class="form-row" style="margin-left: 9px;">
                        <div class="form-group col-sm-4">
                            <input type="number" name="tanggal" placeholder="Day" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="number" name="bulan" placeholder="Month" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="number" name="tahun" placeholder="Year" class="form-control">
                        </div>
                    </div>
                    <div class="form-row" style="margin-left: 16px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" class="form-control" value="Male">
                            <label class="form-check-label">
                                Male
                            </label>
                        </div>
                        <div class="form-check" style="margin-left: 20px;">
                            <input class="form-check-input" type="radio" name="gender" class="form-control" value="Female">
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="field nextBtn">
                        <div class="button btn btn-danger">
                            Next
                        </div>
                        <!-- <button>Next</button> -->
                    </div>
                    <div style="margin-top: -43px;"><a style="color: white; text-decoration:none;" href="/homepage">
                            <P>Skip</P>
                        </a></div>
                </div>

                <div class="page">
                    <!-- <div class="col-md-12">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div><br> -->
                    <div class="col-md-12">
                        <input type="text" name="city" class="form-control" placeholder="Region/City">
                    </div><br>
                    <div class="col-md-12">
                        <input type="text" name="job" class="form-control" placeholder="Job">
                    </div><br>
                    <div class="col-md-12">
                        <input type="text" name="national" class="form-control" placeholder="Nationality">
                    </div>
                    <div class="field btns">
                        <div class="button prev-1 next btn btn-danger">
                            Previous
                        </div>
                        <!-- <button class="prev-1 prev">Previous</button> -->
                        <div class="button next-1 next btn btn-danger">
                            Next
                        </div>
                        <!-- <button class="next-1 next">Next</button> -->
                    </div>
                    <div style="margin-top: -43px;"><a style="color: white; text-decoration:none;" href="/homepage">Skip</a></div>
                </div>

                <div class="page">
                    <div class="title">
                        <!-- <i class="fas fa-check-circle" style="width: 50px; height: 50px;"></i> -->
                        <img src="<?= base_url('assets/user/checked.png') ?>" alt="" style="width: 100px; height: 100px;">
                        <br>
                        Congratulations
                        <p style="font-size: 15px;">Your account has been created successfully</p>
                    </div>
                    <div class="field btns">
                        <!-- <a href="/user/logout">Logout</a> -->
                        <!-- <br> -->
                        <button class="submit btn btn-danger col-md-12 finish" style="font-size: 23px;">Finish</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>

    <script src="<?= base_url('assets/user/script.js') ?>"></script>
</body>

</html>