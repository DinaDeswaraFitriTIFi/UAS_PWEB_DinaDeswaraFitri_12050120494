<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_mahasiswa'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `mahasiswa` WHERE id_mahasiswa = '$id'");

if ($query) {
 # credirect ke page index
 header("location:mahasiswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>