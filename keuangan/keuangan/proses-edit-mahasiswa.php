<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_mahasiswa'];
$nama = $_GET['nama'];
$posisi = $_GET['posisi'];
$alamat = $_GET['alamat'];
$umur = $_GET['umur'];
$kontak = $_GET['kontak'];

//query update
$query = mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama' , posisi='$posisi', alamat='$alamat', umur='$umur', kontak='$kontak' WHERE id_mahasiswa='$id' ");

if ($query) {
 # credirect ke page index
 header("location:mahasiswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>