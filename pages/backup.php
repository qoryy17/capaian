<!-- Persentase Pengiriman Salinan Putusan Tepat Waktu Oleh Tingkat Banding -->
<div class="row mb-4">
    <div class="col-lg-12">
        <h5 class="section-title">
            <i class="bi bi-bar-chart-line"></i> Persentase Pengiriman Salinan Putusan Tepat Waktu Oleh Tingkat Banding
        </h5>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        require_once 'function/getPerkara.php';
        $perkara = new Perkara();
        $totalPerkara = $perkara->getTotalPerkara();
        ?>
        <div class="card stat-card animate-fade-in" style="animation-delay: 0.1s">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="stat-label">Jumlah Salinan Putusan Yang Dikirimkan</div>
                        <div class="stat-value"><?php echo $totalPerkara; ?></div>
                        <small class="text-success"> Dikirimkan Tepat Waktu</small>
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
                        <div class="stat-label">Jumlah Perkara Yang Diputus</div>
                        <div class="stat-value">892</div>
                        <small class="text-success"> Perkara Diputus</small>
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
                        <div class="stat-value">10%</div>
                        <small class="text-success"> 10%</small>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Persentase Penyediaan/Pengiriman Salinan Putusan Tepat Waktu Kepada Pihak -->
<div class="row mb-4">
    <div class="col-lg-12">
        <h5 class="section-title">
            <i class="bi bi-bar-chart-line"></i> Persentase Penyediaan/Pengiriman Salinan Putusan Tepat Waktu Kepada Pihak
        </h5>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        require_once 'function/getPerkara.php';
        $perkara = new Perkara();
        $totalPerkara = $perkara->getTotalPerkara();
        ?>
        <div class="card stat-card animate-fade-in" style="animation-delay: 0.1s">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="stat-label">Jumlah Salinan Putusan Yang Tersedia</div>
                        <div class="stat-value"><?php echo $totalPerkara; ?></div>
                        <small class="text-success"> Dikirimkan Kepada Pihak Tepat Waktu</small>
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
                        <div class="stat-label">Jumlah Perkara Yang Diputus</div>
                        <div class="stat-value">892</div>
                        <small class="text-success"> Perkara Diputus</small>
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
                        <div class="stat-value">10%</div>
                        <small class="text-success"> 10%</small>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Persentase Pengiriman Pemberitahuan Petikan/Amar Putusan Tk. Banding,Kasasi,PK Tepat Waktu Oleh Pengadilan Kepada Pihak -->
<div class="row mb-4">
    <div class="col-lg-12">
        <h5 class="section-title">
            <i class="bi bi-bar-chart-line"></i> Persentase Pengiriman Pemberitahuan Petikan/Amar Putusan Tk. Banding,Kasasi,PK Tepat Waktu Oleh Pengadilan Kepada Pihak
        </h5>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        require_once 'function/getPerkara.php';
        $perkara = new Perkara();
        $totalPerkara = $perkara->getTotalPerkara();
        ?>
        <div class="card stat-card animate-fade-in" style="animation-delay: 0.1s">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="stat-label">Jumlah Pemberitahuan Petikan/Amar</div>
                        <div class="stat-value"><?php echo $totalPerkara; ?></div>
                        <small class="text-success"> Putusan Tk. Banding,Kasasi,PK</small>
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
                        <div class="stat-label">Jumlah Petikan/Amar Yang Diterima</div>
                        <div class="stat-value">892</div>
                        <small class="text-success"> Putusan Tk. Banding,Kasasi,PK</small>
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
                        <div class="stat-value">10%</div>
                        <small class="text-success"> 10%</small>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Persentase Pengiriman Salinan Putusan Perkara Pidana Tk.Banding,Kasasi,PK Tepat Waktu Oleh Pengadilan Kepada Pihak -->
<div class="row mb-4">
    <div class="col-lg-12">
        <h5 class="section-title">
            <i class="bi bi-bar-chart-line"></i> Persentase Pengiriman Salinan Putusan Perkara Pidana Tk.Banding,Kasasi,PK Tepat Waktu Oleh Pengadilan Kepada Pihak
        </h5>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <?php
        require_once 'function/getPerkara.php';
        $perkara = new Perkara();
        $totalPerkara = $perkara->getTotalPerkara();
        ?>
        <div class="card stat-card animate-fade-in" style="animation-delay: 0.1s">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="stat-label">Jumlah Pengiriman Salinan Putusan Pidana</div>
                        <div class="stat-value"><?php echo $totalPerkara; ?></div>
                        <small class="text-success"> Putusan Tk. Banding,Kasasi,PK</small>
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
                        <div class="stat-label">Jumlah Salinan Putusan Yang Diterima</div>
                        <div class="stat-value">892</div>
                        <small class="text-success"> Putusan Tk. Banding,Kasasi,PK</small>
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
                        <div class="stat-value">10%</div>
                        <small class="text-success"> 10%</small>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>