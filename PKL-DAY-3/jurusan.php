<?php
    class Jurusan extends Database
    {
        // Menampilkan data dosen ke index.php
        public function index(){
            $datajurusan = mysqli_query($this->koneksi, "SELECT * FROM guru");

            return $datajurusan;
        }

        public function create($nip, $nama, $alamat){
            mysqli_query($this->koneksi, 
                "INSERT INTO guru VALUES (null, '$nip', '$nama', '$alamat')" 
            );
        }

        public function edit($id){
            $datajurusan = mysqli_query($this->koneksi,
                "SELECT * FROM guru WHERE id='$id'" 
            );

            return $datajurusan;
        }

        public function update($id, $nip, $nama, $alamat){
            mysqli_query($this->koneksi,
                "UPDATE guru SET nip='$nip', nama='$nama', alamat='$alamat' WHERE id='$id'"
            );
        }

        // Menampilkan data jurusan berdasarkan id
        public function show($id){
            $datajurusan = mysqli_query($this->koneksi,
                "SELECT * FROM guru WHERE id='$id'"
            );

            return $datajurusan;
        }

        // Menghapus data dosen
        public function delete($id){
            mysqli_query($this->koneksi, "DELETE FROM guru WHERE id='$id'");
        }
    }

?>                      