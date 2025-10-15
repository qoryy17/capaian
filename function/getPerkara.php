<?php
require_once __DIR__ . '/../config/database.php';


class Perkara
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getTotalPerkara($month = null, $year = null)
    {
        $nowYear = date('Y');
        if ($month !== null && $year !== null) {
            $sql = "SELECT COUNT(*) FROM perkara WHERE MONTH(tanggal_pendaftaran) = $month AND YEAR(tanggal_pendaftaran) = $year";
            $result = $this->conn->query($sql);
            $data = $result->fetch_row();
            return $data[0];
        } elseif ($month !== null) {
            $sql = "SELECT COUNT(*) FROM perkara WHERE MONTH(tanggal_pendaftaran) = $month AND YEAR(tanggal_pendaftaran) = $nowYear";
            $result = $this->conn->query($sql);
            $data = $result->fetch_row();
            return $data[0];
        } elseif ($year !== null) {
            $sql = "SELECT COUNT(*) FROM perkara WHERE YEAR(tanggal_pendaftaran) = $year";
            $result = $this->conn->query($sql);
            $data = $result->fetch_row();
            return $data[0];
        } else {
            $sql = "SELECT COUNT(*) FROM perkara WHERE YEAR(tanggal_pendaftaran) = $nowYear";
            $result = $this->conn->query($sql);
            $data = $result->fetch_row();
            return $data[0];
        }
    }


    public function getAllPerkara() {}
}

// Contoh penggunaan:
// $perkara = new Perkara();
// $data = $perkara->getAllPerkara();
// print_r($data);
