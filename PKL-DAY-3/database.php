<?php
    class Database{
        public $host="localhost", $user="root", $pass="", $db="pkl";
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->koneksi){
                // echo "berhasil";
            }
            else{
                echo "koneksi gagal";
            }
        }
    }
    $db = new Database();

    include 'jurusan.php';
    // incldk