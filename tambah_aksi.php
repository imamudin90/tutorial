<?php
//nambaha data
include 'koneksi.php';//koneksi database

//menangkap data dari form
$nama =$_POST['nama'];
$nim =$_POST ['nim'];
$alamat = $_POST['alamat'];

//menginput ke database
mysqli_query($koneksi,"insert into mahasiswa values ('','$nama', '$nim','$alamat')");


//mengalihkan halaman kembali ke index
header("location:index.php");
?>