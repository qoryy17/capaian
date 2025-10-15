<!-- Beranda - Daftar Menu -->
<div class="container py-4">
    <!-- Header -->
    <div class="text-center mb-5 animate-fade-in">
        <h2 class="section-title">
            Monitoring Capaian Penyelesaian Perkara
        </h2>
        <p class="text-muted">Pilih menu untuk melihat data capaian penyelesaian</p>
    </div>

    <!-- Menu Cards -->
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12 animate-fade-in" style="animation-delay: 0.1s;">
            <div class="stat-card h-100">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mx-auto mb-3">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h5 class="card-title fw-bold mb-3">Penyelesaian Perkara</h5>
                    <p class="card-text text-muted mb-4">
                        Monitoring capaian persentase penyelesaian perkara tepat waktu berdasarkan periode
                    </p>
                    <a href="?page=capaian_penyelesaian_perkara" class="btn btn-warning-custom w-100">
                        <i class="bi bi-arrow-right-circle"></i> Lihat Data
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 animate-fade-in" style="animation-delay: 0.1s;">
            <div class="stat-card h-100">
                <div class="card-body text-center p-4">
                    <div class="stat-icon mx-auto mb-3">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h5 class="card-title fw-bold mb-3">Pengiriman Salinan Putusan</h5>
                    <p class="card-text text-muted mb-4">
                        Monitoring capaian persentase Pengiriman Salinan Putusan tepat waktu berdasarkan periode
                    </p>
                    <a href="?page=capaian_pengiriman_salinan_putusan" class="btn btn-warning-custom w-100">
                        <i class="bi bi-arrow-right-circle"></i> Lihat Data
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="chart-container text-center">
                <h4 class="text-warning-dark mb-3">
                    <i class="bi bi-info-circle"></i> Informasi Sistem
                </h4>
                <p class="text-muted mb-0">
                    Sistem Monitoring Capaian Penyelesaian Perkara - Membantu memantau dan menganalisis kinerja penyelesaian perkara secara real-time
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Additional animation delays */
    .animate-fade-in {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Card hover effects enhancement */
    .stat-card {
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
        transition: left 0.5s;
    }

    .stat-card:hover::before {
        left: 100%;
    }

    .text-warning-dark {
        color: var(--warning-dark);
    }
</style>