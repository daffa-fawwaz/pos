<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport" />
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link
        rel="stylesheet"
        href="../assets/modules/bootstrap/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="../assets/modules/fontawesome/css/all.min.css" />

    <!-- CSS Libraries -->
    <link
        rel="stylesheet"
        href="../assets/modules/jqvmap/dist/jqvmap.min.css" />
    <link
        rel="stylesheet"
        href="../assets/modules/summernote/summernote-bs4.css" />
    <link
        rel="stylesheet"
        href="../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/components.css" />
    <!-- Start GA -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-94034622-3");
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- NAV -->
            <?php include('../components/layout/nav.php') ?>
            <!--SIDEBAR -->
            <?php include('../components/layout/sidebar.php') ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Informasi Akun</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">


                            <div class="container">
                                <div class="row justify-content-center">
                                    <!-- Kolom untuk gambar -->
                                    <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center mb-4 mb-md-0">
                                        <div class="card col-lg-10 d-flex justify-content-center align-items-center p-3">
                                            <img src="../dummy/kunci.png" width="200" height="200" alt="" class="img-fluid" style="max-width: 200px; height: auto;">
                                        </div>
                                    </div>

                                    <!-- Kolom untuk form -->
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card">
                                            <form method="post" class="needs-validation" novalidate="">
                                                <div class="card-header">
                                                    <h4>Ganti Password</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-12">
                                                            <label>Password Lama</label>
                                                            <input type="text" class="form-control" required="">
                                                            <div class="invalid-feedback">
                                                                Please fill in the username.
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label>Password Baru</label>
                                                            <input type="text" class="form-control" required="">
                                                            <div class="invalid-feedback">
                                                                Please fill in the username.
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label>Konfirmasi Password Baru</label>
                                                            <input type="text" class="form-control" required="">
                                                            <div class="invalid-feedback">
                                                                Please fill in the username.
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-right">
                                                    <button class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            </section>
        </div>




        <!-- FOOTER -->
        <?php include('../components/layout/footer.php') ?>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../assets/modules/jquery.sparkline.min.js"></script>
    <script src="../assets/modules/chart.min.js"></script>
    <script src="../assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>