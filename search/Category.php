<?php

require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Model.php';

$keyword = $_GET["cari"];
$categories = new Category();
$categories = $categories->search($keyword);
?>

<div id="container" class="table-responsive">
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
        <?php foreach ($categories as $categori): ?>

            <tr>
                <td>
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox">
                        <label for=" checkbox" class="custom-control-label">&nbsp;</label>
                    </div>
                </td>
                <td><?= $categori['name'] ?></td>
                <td>
                    <a href="<?= $categori['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="<?= $categori['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="<?= $categori['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>