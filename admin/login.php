<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/velonic/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 01:31:54 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Jaga - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/hesti.png">

    <!-- Theme Config Js -->
    <script src="../assets/js/config.js"></script>

    <!-- App css -->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-6 col-md-8 ">
                    <div class="card overflow-hidden ">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4 text-center">
                                        <a href="index.php" class="logo-light">
                                            <img src="../assets/images/hesti.png" alt="logo" height="100">
                                        </a>
                                        <a href="index.php" class="logo-dark">
                                            <img src="../assets/images/hesti.png" alt="dark logo" height="100">
                                        </a>
                                    </div>
                                    <div class=" my-auto">
                                        <h5 class="fs-20 text-center">RUMAH SAKIT Tk.III WIRASAKTI KUPANG</h5>
                                        <!-- <p class="text-muted mb-3">Masukan Username dan Password
                                        </p> -->

                                        <!-- form -->
                                        <form action="cekLogin.php" method="POST" class="p-4">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input class="form-control" type="text" id="username" name="username" required placeholder="Masukan Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" name="password" required id="password" placeholder="Masukan Password">
                                            </div>
                                            <div class="mb-0 text-start">
                                                <input class="btn btn-soft-primary w-100" type="submit" name="loginBtn" value="Log In &#10132;">
                                            </div>
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            Jaga ©
            <script>
                document.write(new Date().getFullYear())
            </script>
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

</body>



</html>