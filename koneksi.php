<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_trip"; // Pastikan nama database ini sesuai (db_trip atau db_josjourney)

// Membuat koneksi dengan nama variabel $koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['kirim'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Gunakan $koneksi di sini, sesuaikan juga nama tabelnya ('bookings' atau 'tb_booking')
    $query = "INSERT INTO bookings (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Pesan booking berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan pesan.'); window.location='index.php';</script>";
    }
}
?>