<?php
require_once __DIR__ . '/../models/Anggota.php';

use models\Anggota;

$data = Anggota::get();
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
                    <h1 class="mt-4">👥 Anggota</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">📋 Daftar Anggota</li>
                    </ol>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            📚 List Anggota
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-end">
                                <a href="create-anggota.php" class="btn btn-success">
                                    ➕ Tambah Anggota
                                </a>
                            </div>
                            <table id="datatablesSimple" class="table table-hover table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>🔢 No</th>
                                        <th>🆔 NIP</th>
                                        <th>👤 Nama Pegawai</th>
                                        <th>🏷️ Kartu Diskon</th>
                                        <th>✅ Status Anggota</th>
                                        <th>⚙️ Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $index => $dt) : ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= htmlspecialchars($dt['nip']) ?></td>
                                            <td><?= htmlspecialchars($dt['nama']) ?></td>
                                            <td><?= htmlspecialchars($dt['kartu_diskon']) ?></td>
                                            <td>
                                                <?php if (strtolower($dt['status_aktif']) === 'aktif') : ?>
                                                    <span class="badge bg-success">✔️ Aktif</span>
                                                <?php else : ?>
                                                    <span class="badge bg-secondary">❌ Tidak Aktif</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="edit-anggota.php?id=<?= $dt['id'] ?>" class="btn btn-warning btn-sm">
                                                    ✏️ Ubah Status
                                                </a>
                                                <a href="delete-anggota.php?id=<?= $dt['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus anggota ini? 🗑️');">
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