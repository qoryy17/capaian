<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Capaian Penyelesaian Perkara</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-clipboard-data"></i> Monitoring Capaian
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="?page=beranda"><i class="bi bi-house-door"></i> Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="capaianDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-file-text"></i> Capaian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="capaianDropdown">
                            <li>
                                <a class="dropdown-item" href="?page=capaian_penyelesaian_perkara">
                                    Persentase Penyelesaian Perkara Tepat Waktu
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="?page=capaian_salinan">
                                    Persentase Pengiriman Salinan Tepat Waktu
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Konten Dinamis -->
    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
        $file = __DIR__ . "/pages/{$page}.php";
        if (preg_match('/^[a-zA-Z0-9_]+$/', $page) && file_exists($file)) {
            include $file;
        } else {
            echo '<div class="alert alert-danger mt-4">Halaman tidak ditemukan.</div>';
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>

</body>

</html>