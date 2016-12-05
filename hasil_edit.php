<?php 
include "koneksi.php"; 
$NIM=$_GET['NIM'];
$nama=$_GET['nama'];
$jurusan=$_GET['jurusan'];
$prodi=$_GET['prodi'];
$alamat=$_GET['alamat'];


mysql_query("UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', prodi='$prodi', alamat='$alamat' WHERE NIM='$NIM'"); 

header("location:http://localhost/template/index.php?page=tabel");

?>