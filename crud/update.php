<?php
// koneksi data base
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

// update data ke data base
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>