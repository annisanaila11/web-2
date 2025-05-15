<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Dashboard Koperasi Pegawai" />
    <meta name="author" content="Annisa Naila Yasmin" />
    <title>Annisa Naila Yasmin - Koperasi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../public/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .dashboard-welcome {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: #2c3e50;
        }

        .card-stats {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .stat-card {
            flex: 1;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgb(101 105 214 / 0.3);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.3s ease;
            font-size: 0.85rem;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgb(101 105 214 / 0.5);
        }

        .stat-info {
            font-size: 0.9rem;
        }

        .stat-number {
            font-size: 1.6rem;
            font-weight: 700;
        }

        .stat-icon {
            font-size: 2.5rem;
            opacity: 0.7;
        }

        h1.mt-4 {
            font-size: 1.8rem;
        }

        .breadcrumb-item.active {
            font-size: 0.9rem;
        }

        .card-header {
            font-size: 1rem;
            font-weight: 600;
        }

        .card-body h1 {
            font-size: 1.2rem;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php include_once 'partials/navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once 'partials/sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">📊 Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">🏠 Home</li>
                    </ol>

                    <div class="dashboard-welcome">
                        Selamat datang, <strong>Annisa Naila Yasmin</strong>! 👋
                    </div>

                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-info text-white">
                            <i class="fas fa-tachometer-alt me-1"></i>
                            Ringkasan Koperasi Pegawai
                        </div>
                        <div class="card-body">
                            <div class="card-stats">
                                <div class="stat-card">
                                    <div class="stat-info">
                                        Total Pegawai
                                    </div>
                                    <div class="stat-number">
                                        125
                                    </div>
                                    <div class="stat-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>

                                <div class="stat-card" style="background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%);">
                                    <div class="stat-info">
                                        Kartu Diskon Aktif
                                    </div>
                                    <div class="stat-number">
                                        38
                                    </div>
                                    <div class="stat-icon">
                                        <i class="fas fa-ticket-alt"></i>
                                    </div>
                                </div>

                                <div class="stat-card" style="background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);">
                                    <div class="stat-info">
                                        Produk Tersedia
                                    </div>
                                    <div class="stat-number">
                                        54
                                    </div>
                                    <div class="stat-icon">
                                        <i class="fas fa-box-open"></i>
                                    </div>
                                </div>

                                <div class="stat-card" style="background: linear-gradient(135deg, #614385 0%, #516395 100%);">
                                    <div class="stat-info">
                                        Anggota Aktif
                                    </div>
                                    <div class="stat-number">
                                        89
                                    </div>
                                    <div class="stat-icon">
                                        <i class="fas fa-id-card"></i>
                                    </div>
                                </div>
                            </div>
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