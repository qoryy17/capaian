<?php
require_once __DIR__ . '/../config/database.php';

class Persentase
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getPenyelesaianPerkara($year)
    {
        // Rumus Indikator (Jumlah Perkara Diselesaikan Tepat Waktu / Jumlah Perkara Diselesaikan ) * 100%
        $jlhPerkaraSelesaiTepatWaktu = "SELECT COUNT(*) AS total FROM perkara a LEFT JOIN perkara_putusan b ON b.perkara_id = a.perkara_id WHERE a.tahapan_terakhir_id = 15 AND YEAR(a.tanggal_pendaftaran) = $year AND b.tanggal_minutasi IS NOT NULL AND DATEDIFF(b.tanggal_minutasi, a.tanggal_pendaftaran) <= 150;";
        $result = $this->conn->query($jlhPerkaraSelesaiTepatWaktu);
        $data = $result->fetch_row();

        $jlhPerkaraSelesai = "SELECT COUNT(*) AS total FROM perkara a LEFT JOIN perkara_putusan b ON b.perkara_id = a.perkara_id WHERE a.tahapan_terakhir_id = 15 AND YEAR(a.tanggal_pendaftaran) = $year AND b.tanggal_minutasi IS NOT NULL;";
        $result2 = $this->conn->query($jlhPerkaraSelesai);
        $data2 = $result2->fetch_row();

        return $result = [
            'jlhPerkaraSelesaiTepatWaktu' => $data[0],
            'jlhPerkaraSelesai' => $data2[0],
            'persentase' => ($data2[0] == 0) ? 0 : ($data[0] / $data2[0] * 100)
        ];
    }

    public function getPersentasePengirimanSalputBanding()
    {
        // Rumus Indikator Jumlah Salinan Putusan Yang Dikirim Ke PN Pengaju / Jumlah Perkara Yang Diputus * 100%
    }

    public function getPersentasePengirimanSalputPertama()
    {
        // Rumus Indikator Jumlah Salinan Putusan Yang Dikirim Ke Pihak / Jumlah Perkara Yang Diputus * 100%
    }

    public function getPersentasePengirimanPetikanUpayaHukum()
    {
        // Rumus Indikator Jumlah Pemberitahuan petikan/amar tk banding,kasasi,pk yang diberitahukan ke pihak / Jumlah petikan/amar yang diterima pengadilan * 100%
    }

    public function getPersentasePengirimanSalinanPutusanUpayaHukum()
    {
        // Rumus Indikator Jumlah Salinan Putusan tk banding,kasasi,pk yang diberitahukan ke pihak / Jumlah petikan/amar yang diterima pengadilan* 100%
    }

    public function getPersentasePutusanPadaDirput()
    {
        // Jumlah Putusan yang diunggah pada DIRPUT / Jumlah Perkara yang diminutasi * 100%
    }

    public function getPersentaseEksekusi()
    {
        // Rumus Indikator jumlah permohonan eksekusi yang diselesaikan / jumlah putusan putusan yang dimohon eksekusi * 100%
    }

    public function getPersentasePerkaraDiversi()
    {
        // Rumus Indikator jumlah perkara berhasil diversi / jumlah perkara yang dapat diversi * 100%
    }

    public function getPersentasePerkaraMediasi()
    {
        // Rumus Indikator jumlah perkara berhasil mediasi / jumlah perkara yang dapat mediasi * 100%
    }

    public function getPersentasePerdataEcourt()
    {
        // Rumus Indikator jumlah perkara perdata yang didaftarkan melalui ecourt / jumlah perkara perdata yang didaftarkan * 100%
    }

    public function getPersentasePidanaEberpadu()
    {
        // Rumus indikator jumlah perkara pidana yang dilimpahkan secara elektronik / jumlah perkara yang dilimpahkan * 100%
    }

    public function getPersentaseLayananPidanaEberpadu()
    {
        // Rumus indikator jumlah layanan pidana yang dilakukan secara elektronik / jumlah layanan pidana yang dilakukan * 100%
    }
}

// Contoh penggunaan:
// $persen = new Persentase();
// echo $persen->getPenyelesaianPerkara();
// echo $persen->getPersentasePerkaraMinutasi();
// echo $persen->getPersentasePenyelesaianPidana();
// echo $persen->getPersentasePenyelesaianPerdata();
