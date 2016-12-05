<?php 
include "koneksi.php"; 
if (isset($_GET['submit']))
{
	$NIM=$_GET['NIM'];
	$nama=$_GET['nama'];
	$jurusan=$_GET['jurusan'];
	$prodi=$_GET['prodi'];
	$alamat=$_GET['alamat'];

	mysql_query("INSERT INTO mahasiswa (NIM, nama, jurusan, prodi, alamat) VALUES ('$NIM','$nama','$jurusan','$prodi','$alamat')") or die (mysql_error());
	header("location:http://localhost/template/index.php?page=tabel");
}

?>