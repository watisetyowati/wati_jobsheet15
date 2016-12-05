<?php 
 
include "koneksi.php"; 
 
$hapus= $_GET['NIM']; 

$query = "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`NIM` = $hapus"; 
$hasil = mysql_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); 
document.location="http://localhost/template/index.php?page=tabel";</script>';

?>