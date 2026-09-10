<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama   = mysqli_real_escape_string($koneksi, $_POST['nama_peserta']);
    $email  = mysqli_real_escape_string($koneksi, $_POST['email']);
    $destinasi = mysqli_real_escape_string($koneksi, $_POST['destinasi']);
    $tgl    = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $jumlah = mysqli_real_escape_string($koneksi, $_POST['jumlah_peserta']);

    $query = "INSERT INTO pesanan (nama_peserta, email, destinasi, tanggal, jumlah_peserta) 
              VALUES ('$nama', '$email', '$destinasi', '$tgl', '$jumlah')";
              
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>