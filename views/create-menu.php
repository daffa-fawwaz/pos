<?php

require_once __DIR__ . '/../Model/Model.php';
require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Item.php';

$categories = new Category();
$categories = $categories->all();

$menu = new Item();

if (isset($_POST["submit"])) {

    $datas = [
        "post" => $_POST,
        "files" => $_FILES,
    ];

    $result = $menu->create($datas);

    if (gettype($result) == "string") {
        echo "<script>alert('{$result}');
        window.location.href = 'create-menu.php';</script>";
    } else {
        echo "<script>alert('Menu berhasil ditambahkan');
        window.location.href = 'create-menu.php';</script>";
    }
}

?>




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

    <!-- JQUERY -->
    <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

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
                        <h1>Tambah Menu</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                                <div>
                                    <img src="../Fastfood.png" alt="" width="400">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center w-full">
                                <div class="card w-full col-12">
                                    <div class="card-body">
                                        <h4>Input Menu</h4>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data" class="card-body">
                                        <div class="form-group">
                                            <label for="name">Nama Menu</label>
                                            <input id="name" name="name" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label for="attachment" class="form-control-label">Gambar</label>
                                            <div>
                                                <div class="custom-file">
                                                    <input type="file" name="attachment" class="custom-file-input" id="attachment">
                                                    <label class="custom-file-label">Choose File</label>
                                                </div>
                                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>jQuery Selectric</label>
                                            <select name="categories_id" class="form-control selectric">
                                                <?php foreach ($categories as $categori): ?>
                                                    <option value="<?= $categori["id"] ?>"><?= $categori["name"] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Harga</label>
                                            <input id="price" name="price" type="number" class="form-control ">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button name="submit" type="submit" class="btn btn-primary ">Tambahkan</button>
                                        </div>
                                    </form>
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
    <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
</body>

</html>