<?php
include '../database.php';
$jurusan = new Jurusan();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create"){
        $jurusan->create($nip, $nama, $alamat);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $jurusan->update($id, $nip, $nama, $alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $jurusan->delete($id);
        header("location:index.php");
    }
}
?>