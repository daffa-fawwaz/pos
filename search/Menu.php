<?php
require_once __DIR__ . '/../Model/Item.php';
require_once __DIR__ . '/../Model/Model.php';

$keyword = $_GET["cari"];

$menus = new Item();

$limit = 2;
$menus_seacrh = "";
$halamanAktif = (isset($_GET["page"]) ? $_GET["page"] : 1);
$startData = ($limit * $halamanAktif) - $limit;
$lenght = isset($keyword) && $keyword != "" ? count($menus->search($keyword)) : count($menus->all());
$countPage = ceil($lenght / $limit);


if (isset($keyword)) {
    $menus_seacrh = $menus->search($keyword, $startData, $limit);
} else {
    $menus_seacrh = $menus->paginate($startData, $limit);
}




?>





<div id="container" class="table-responsive">
    <?php if ($menus_seacrh == null): ?>
        <div class="alert alert-danger" role="alert">
            Data yang anda cari tidak ada!!
        </div>
    <?php else: ?>
        <table class="table table-striped">
            <tr>
                <th>
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                </th>
                <th>Nama Kategori</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            <?php $no = 1 ?>
            <?php foreach ($menus_seacrh as $menu): ?>

                <tr>
                    <td>
                        <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?= $no ?>">
                            <label for=" checkbox-<?= $no++ ?>" class="custom-control-label">&nbsp;</label>
                        </div>
                    </td>
                    <td><?= $menu['name'] ?></td>
                    <td><img width="100" src="../public/img/items/<?= $menu["attachment"] ?>" alt=""></td>
                    <td><?= $menu['price'] ?></td>
                    <td>
                        <a href="<?= $menu['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="<?= $menu['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="<?= $menu['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>



    <div class="card-body">
        <nav aria-label="...">
            <ul class="pagination">

                <?php if ($halamanAktif > 1): ?>
                    <a class="page-link" href="?page=<?= $halamanAktif - 1 ?>" tabindex="-1">Previous</a>
                <?php else: ?>
                    <a class="page-link" href="" tabindex="-1">Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $countPage; $i++) : ?>
                    <?php if ($i == $halamanAktif): ?>
                        <button class="btn btn-primary"><a href="?page=<?= $i ?>" class="text-light"><?= $i ?></a></button>
                    <?php else: ?>
                        <button class="btn"><a href="?page=<?= $i ?>" class="text-primary"><?= $i ?></a></button>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($halamanAktif < $countPage): ?>
                    <a class="page-link" href="?page=<?= $halamanAktif + 1 ?>">Next</a>
                <?php else: ?>
                    <a class="page-link" href="">Next</a>
                <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</div>