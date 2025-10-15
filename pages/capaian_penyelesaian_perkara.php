<?php
// Proses filter data
require_once 'function/getPersentasePenyelesaianPerkara.php';
$tahunFilter = isset($_GET['tahun']) ? (int)$_GET['tahun'] : date('Y');

try {
    $persentase = new getPersentasePenyelesaianPerkara();
    $dataTotal = $persentase->total($tahunFilter);
    $dataPerbulan = $persentase->perbulan($tahunFilter);
    $dataPertriwulan = $persentase->pertriwulan($tahunFilter);
} catch (Exception $e) {
    echo '<div class="alert alert-danger">Error: ' . $e->getMessage() . '</div>';
    exit;
}

// Array nama bulan
$namaBulan = [
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
];
?>

<div class="container px-4">

    <!-- Filter Section -->
    <div class="filter-card animate-fade-in">
        <form method="GET" action="">
            <input type="hidden" name="page" value="capaian_penyelesaian_perkara">
            <div class="row align-items-end">
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold">Periode Tahun</label>
                    <select class="form-select" name="tahun">
                        <?php
                        foreach (range(2020, date('Y')) as $year) {
                            echo "<option value='$year' " . ($year == $tahunFilter ? 'selected' : '') . ">$year</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <button type="submit" class="btn btn-warning-custom w-100">
                        <i class="bi bi-search"></i> Filter Data
                    </button>
                </div>
            </div>
        </form>
    </div>


    <!-- Persentase Penyelesaian Perkara Tepat Waktu -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <h5 class="section-title">
                <i class="bi bi-bar-chart-line"></i> Persentase Penyelesaian Perkara Tepat Waktu - Tahun <?php echo $tahunFilter; ?>
            </h5>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card animate-fade-in" style="animation-delay: 0.1s">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="stat-label">Jumlah Perkara Diselesaikan Tepat Waktu</div>
                            <div class="stat-value"><?php echo number_format($dataTotal['jlhPerkaraSelesaiTepatWaktu']); ?></div>
                            <small class="text-success"> Selesai Tepat Waktu</small>
                        </div>
                        <div class="stat-icon">
                            <i class="bi bi-folder"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card animate-fade-in" style="animation-delay: 0.2s">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="stat-label">Jumlah Perkara Diselesaikan</div>
                            <div class="stat-value"><?php echo number_format($dataTotal['jlhPerkaraSelesai']); ?></div>
                            <small class="text-success"> Perkara Selesai</small>
                        </div>
                        <div class="stat-icon">
                            <i class="bi bi-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card animate-fade-in" style="animation-delay: 0.2s">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="stat-label">Total Persentase %</div>
                            <div class="stat-value"><?php echo number_format($dataTotal['persentase'], 2); ?>%</div>
                            <small class="text-success"> Capaian</small>
                        </div>
                        <div class="stat-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <h5 class="section-title">
                <i class="bi bi-bar-chart-line"></i> Detail Penyelesaian Perkara Tepat Waktu Per Bulan
            </h5>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive align-middle animate-fade-in" style="animation-delay: 0.3s">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah Perkara Diselesaikan Tepat Waktu</th>
                                <th>Jumlah Perkara Diselesaikan</th>
                                <th>Persentase %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataPerbulan as $bulan => $data) {
                                echo "<tr>";
                                echo "<td>{$no}</td>";
                                echo "<td>{$namaBulan[$bulan]}</td>";
                                echo "<td>" . number_format($data['jlhPerkaraSelesaiTepatWaktu']) . "</td>";
                                echo "<td>" . number_format($data['jlhPerkaraSelesai']) . "</td>";
                                echo "<td>" . number_format($data['persentase'], 2) . "%</td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <h5 class="section-title">
                <i class="bi bi-bar-chart-line"></i> Detail Penyelesaian Perkara Tepat Waktu Per Triwulan
            </h5>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive align-middle animate-fade-in" style="animation-delay: 0.3s">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah Perkara Diselesaikan Tepat Waktu</th>
                                <th>Jumlah Perkara Diselesaikan</th>
                                <th>Persentase %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataPertriwulan as $triwulan => $data) {
                                echo "<tr>";
                                echo "<td>{$no}</td>";
                                echo "<td>Triwulan {$triwulan}</td>";
                                echo "<td>" . number_format($data['jlhPerkaraSelesaiTepatWaktu']) . "</td>";
                                echo "<td>" . number_format($data['jlhPerkaraSelesai']) . "</td>";
                                echo "<td>" . number_format($data['persentase'], 2) . "%</td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Charts Section -->
    <!-- <div class="row mb-4">
        <div class="col-lg-8 mb-4">
            <div class="chart-container animate-fade-in">
                <h5 class="section-title">
                    <i class="bi bi-graph-up"></i> Grafik Penyelesaian Perkara Bulanan
                </h5>
                <canvas id="monthlyChart" height="100"></canvas>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="chart-container animate-fade-in">
                <h5 class="section-title">
                    <i class="bi bi-pie-chart"></i> Distribusi Jenis Perkara
                </h5>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div> -->



    <!-- Footer -->
    <footer class="text-center py-4 mt-5">
        <p class="text-muted">&copy; 2025 Perencanaan TI dan Pelaporan. All rights reserved.</p>
    </footer>

</div>