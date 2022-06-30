<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['nama'];
$posisi = $_GET['posisi'];
$alamat = $_GET['alamat'];
$umur = $_GET['umur'];
$kontak = $_GET['kontak'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `posisi`, `alamat`, `umur`, `kontak`) VALUES (null, '$nama', '$posisi', '$alamat', '$umur', '$kontak')");

if ($query) {
 # credirect ke page index
 header("location:mahasiswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>