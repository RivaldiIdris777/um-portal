<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo e(asset('')); ?>favicon.ico" type="image/png" />
    <!--plugins-->
    <link href="<?php echo e(asset('')); ?>package/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>package/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" />
    <link href="<?php echo e(asset('')); ?>package/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo e(asset('')); ?>package/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo e(asset('')); ?>package/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('')); ?>package/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>package/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>package/assets/css/app.css" rel="stylesheet">
    <link href="<?php echo e(asset('')); ?>package/assets/css/icons.css" rel="stylesheet">
    <title>Login - Universitas Muhammadiyah Kota Jambi</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <header class="login-header shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e(asset('')); ?>logo_um.png" width="40" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="<?php echo e(asset('')); ?>logo_pmb.png" width="180" alt="" />
                        </div>
                        <div class="card mt-5 mt-lg-0">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center"> <span>LOGIN UNTUK MANAJEMEN DATA</span>
                                        <hr />
                                        <?php if($message = Session::get('Success')): ?>
                                        <div
                                            class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3 p-2">
                                                    <div class="text-white"><?php echo e($message); ?></div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3" method="POST" action="<?php echo e(route('login')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Alamat
                                                        Email</label>
                                                    <input type="email"
                                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="inputEmailAddress" placeholder="Masukkan Email" name="email"
                                                        value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                                        autofocus>
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password"
                                                            class="form-control border-end-0 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            id="inputChoosePassword" placeholder="Masukkan Password"
                                                            name="password"> <a href="javascript:;"
                                                            class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="bx bxs-lock-open"></i>Login</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
            <p class="mb-0">CopyLeft 2023. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('')); ?>package/assets/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('')); ?>package/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php echo e(asset('')); ?>package/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?php echo e(asset('')); ?>package/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });

    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/auth/login.blade.php ENDPATH**/ ?>