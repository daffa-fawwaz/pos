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
                        <h1>Home Category</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Advanced Table</h4>
                                        <div class="card-header-form">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Nama Kategori</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>Menu Category</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary">Detail</a>
                                                        <a href="#" class="btn btn-success">Edit</a>
                                                        <a href="#" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            </table>
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