<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud_oop');

class Koneksi
{
    public $db;
    public function __construct()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (!$conn) {
            die("Gagal Terhubung ke database:" . mysqli_connect_error());
        } else {
            $this->db = $conn;
            // echo "Berhasil Terhubung";
            return $this->db;
        }
    }
}