<?php
require_once __DIR__ . '/../models/JenisProduk.php';

use models\JenisProduk;

$data = JenisProduk::get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Annisa Naila Yasmin - Koperasi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../public/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once 'partials/navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once 'partials/sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">🛍️ Jenis Produk</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">📦 Daftar Jenis Produk</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            📝 List Jenis Produk
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-end">
                                <a href="create-jenis-produk.php" class="btn btn-success">
                                    ➕ Tambah Jenis Produk
                                </a>
                            </div>
                            <table id="datatablesSimple" class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>🔢 No</th>
                                        <th>📛 Nama</th>
                                        <th>📝 Deskripsi</th>
                                        <th>⚙️ Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $index => $dt) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= htmlspecialchars($dt['nama']) ?></td>
                                            <td><?= htmlspecialchars($dt['deskripsi']) ?></td>
                                            <td>
                                                <a href="detail-jenis-produk.php?id=<?= $dt['id'] ?>" class="btn btn-primary btn-sm">
                                                    🔍 Detail
                                                </a>
                                                <a href="edit-jenis-produk.php?id=<?= $dt['id'] ?>" class="btn btn-warning btn-sm">
                                                    ✏️ Edit
                                                </a>
                                                <a href="delete-jenis-produk.php?id=<?= $dt['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jenis produk ini? 🗑️');">
                                                    🗑️ Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once 'partials/footer.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/datatables-simple-demo.js"></script>
</body>

</html>