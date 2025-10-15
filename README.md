# 📊 Monitoring Capaian Penyelesaian Perkara

Aplikasi web dashboard untuk memantau dan menampilkan Key Performance Indicator (KPI) terkait penyelesaian perkara di lingkungan peradilan. Aplikasi ini menyajikan data secara visual dan tabular untuk memudahkan analisis capaian kinerja.


*Catatan: Ganti gambar di atas dengan screenshot aplikasi Anda.*

---

## ✨ Fitur Utama

- **Dashboard Statistik**: Menampilkan ringkasan data capaian dalam bentuk kartu statistik yang mudah dibaca.
- **Filter Data Dinamis**: Memungkinkan pengguna untuk memfilter data berdasarkan periode tahunan.
- **Laporan Detail**:
  - **Persentase Penyelesaian Perkara Tepat Waktu**: Menampilkan total, rincian bulanan, dan rincian triwulanan.
  - (Dalam Pengembangan) Metrik capaian lainnya seperti pengiriman salinan putusan, mediasi, e-Court, dll.
- **Desain Responsif**: Tampilan yang optimal di berbagai perangkat, baik desktop maupun mobile, berkat Bootstrap 5.
- **Struktur Modular**: Kode diorganisir dalam folder `pages` dan `function` untuk kemudahan pemeliharaan.

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP 8+ (dengan pendekatan OOP)
- **Frontend**:
  - HTML5
  - CSS3 (dengan Bootstrap 5)
  - JavaScript (dengan Chart.js untuk visualisasi data)
- **Database**: MySQL / MariaDB
- **Web Server**: Apache, Nginx, atau server lain yang mendukung PHP.

---

## 🚀 Instalasi dan Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

1.  **Clone Repository**
    ```bash
    git clone [URL-repository-anda]
    cd capaian
    ```

2.  **Konfigurasi Database**
    - Buat sebuah database baru di MySQL/MariaDB Anda (misalnya, `db_sipp311`).
    - Impor skema dan data database yang diperlukan. Berdasarkan query yang ada, Anda memerlukan setidaknya tabel `perkara` dan `perkara_putusan`.
    - Salin atau ubah nama file `config/database.php` dan sesuaikan kredensial database Anda.

    ```php
    // d:\CODING\PHP\capaian\config\database.php
    class Database
    {
        private $host = 'localhost';
        private $user = 'root'; // <-- Ganti dengan user Anda
        private $pass = 'sql123!@#'; // <-- Ganti dengan password Anda
        private $dbname = 'db_sipp311'; // <-- Ganti dengan nama database Anda
        // ...
    }
    ```

3.  **Jalankan Web Server**
    - Gunakan web server lokal seperti XAMPP, WAMP, atau MAMP.
    - Letakkan folder proyek di dalam direktori `htdocs` atau `www`.
    - Buka browser dan akses proyek, misalnya: `http://localhost/capaian/`

---

## 📂 Struktur Proyek

```
capaian/
├── assets/
│   ├── css/
│   │   └── style.css       # File CSS kustom
│   └── js/
│       └── script.js       # File JavaScript kustom
├── config/
│   └── database.php        # Kelas untuk koneksi database
├── function/
│   ├── getPerkara.php      # Kelas untuk mengambil data umum perkara
│   └── getPersentase...php # Kelas-kelas untuk kalkulasi metrik KPI
├── pages/
│   ├── beranda.php         # Halaman utama
│   └── capaian_... .php    # Halaman-halaman konten dinamis
├── index.php               # File entri utama dan router sederhana
└── README.md               # File ini
```

---

## 📝 Skema Database (Contoh)

Berdasarkan query yang ada di dalam kode, berikut adalah contoh minimal kolom yang dibutuhkan dalam tabel Anda:

- **`perkara`**
  - `perkara_id` (Primary Key)
  - `tanggal_pendaftaran` (DATE/DATETIME)
  - `tahapan_terakhir_id` (INT)

- **`perkara_putusan`**
  - `perkara_id` (Foreign Key ke `perkara.perkara_id`)
  - `tanggal_minutasi` (DATE/DATETIME)

---