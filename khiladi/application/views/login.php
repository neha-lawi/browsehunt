<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Find My Response</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo CSS;?>custom.css" />
</head>

<body>
    <!-- Login Wrapper -->
    <div id="loginWrapper" class="login-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex shadow bg-white">
                        <div class="login-wrap p-5 p-md-5 pt-md-3">
                            <div class="brand-img text-center mb-4">
                                <!-- <span class="brand-name">RMG</span -->
                                <!-- <img src="https://ik.imagekit.io/gku4adhog/thevadapav/TheVadaPav_logo%20(1).svg?updatedAt=1701259772354" alt="Login Logo" class="img-fluid" /> -->
                            </div>
                            <?php echo validation_errors();
                    $errMsg = $this->session->flashdata("errormsg");
                    if(!empty($errMsg)){ ?>
                            <div class="text-danger"><?php echo $errMsg;?></div>
                            <?php } ?>

                            <form method="POST" action="">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email address" required="" value="<?php echo set_value('email');?>"/>
                                    <?php echo form_error('email');?>

                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password" required=""/>
                                    <?php echo form_error('password');?>

                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn-common bg-black2">Log In</button>
                                </div>

                                <!-- <p class="small my-3 pb-lg-2">
                                    <a class="text-muted text-decoration-none" href="#">Forgot password?</a>
                                </p>
                                <p class="small mb-0">
                                    Don't have an account?
                                    <a href="#!" class="btn-link text-decoration-none text-dark"><strong>Register
                                            here</strong>
                                    </a>
                                </p> -->
                            </form>
                        </div>
                        <div class="login-img d-none d-md-block">
                            <img src="https://ik.imagekit.io/gku4adhog/thevadapav/LoginPage_TheVadaPav.jpg?updatedAt=1701258933386" alt="First slide" class="img-fluid" />
                            <!-- <div class="login-img-caption">
                                <h5><strong>Login Here</strong></h5>
                                <p>Track Data at TheVadapav</p>
                            </div>
                            <div class="img-overlay"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo JS;?>jquery.min.js"></script>
    <script src="<?php echo VEN;?>bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo JS;?>sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo VEN;?>jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo VEN;?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo VEN;?>datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo JS;?>demo/datatables-demo.js"></script>
</body>

</html>