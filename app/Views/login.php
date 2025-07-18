<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/images/favicon.ico'); ?>">

    <!-- Layout config Js -->
    <script src="<?= base_url('public/assets/js/layout.js'); ?>"></script>

    <!-- Bootstrap Css -->
    <link href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('public/assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('public/assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url('public/assets/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <!-- <a href="#" class="d-inline-block auth-logo">
                                    <img src="" alt="" height="20">
                                </a> -->
                            </div>
                            <p class="mt-3 fs-15 fw-medium"></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back!</h5>
                                </div>

                                <!-- Display error or success message if exists -->
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="error-message">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (session()->getFlashdata('success')): ?>
                                    <div class="success-message">
                                        <?= session()->getFlashdata('success'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="p-2 mt-4">
                                    <form action="<?= base_url('/userlogin'); ?>" method="post">
                                        <?= csrf_field(); ?>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Login</button>
                                    </form>
                                    <!-- Add this just below the password input or the login button -->
                                    <!-- <div class="text-center mt-3">
                                        <a href="//base_url('auth/forgot_password'); " class="text-muted">Forgot Password?</a>
                                    </div> -->

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>  Services <i class="mdi mdi-heart text-danger"></i> by Ephphatha Softech Pvt.Ltd.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/libs/simplebar/simplebar.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/libs/node-waves/waves.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/libs/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('public/assets/js/pages/plugins/lord-icon-2.1.0.js'); ?>"></script>
    <script src="<?= base_url('public/assets/js/plugins.js'); ?>"></script>

    <!-- particles js -->
    <script src="<?= base_url('public/assets/libs/particles.js/particles.js'); ?>"></script>
    <!-- particles app js -->
    <script src="<?= base_url('public/assets/js/pages/particles.app.js'); ?>"></script>
    <!-- password-addon init -->
    <script src="<?= base_url('public/assets/js/pages/password-addon.init.js'); ?>"></script>
</body>

</html>