<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_trip"; // Pastikan sama dengan nama database di phpMyAdmin

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jos Journey</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Jos Journey</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyek">Destinasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gear">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Booking</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="beranda" class="container-fluid hero-section text-center py-5">
        <div class="container py-5">
            <img src="Gambar/logosantimuka.png" alt="Logo" class="rounded-circle mb-3 shadow foto-profil">
            <h1 class="display-5 text-white font-weight-bold">Jelajahi Keindahan Alam Bersama Jos Journey</h1>
            <p class="text-light">Platform open trip tepercaya untuk pendakian gunung, wisata alam, dan eksplorasi.
                Aman, nyaman, dan berkesan.</p>
            <a href="#proyek" class="btn btn-primary btn-sm">Jelajahi Paket Trip</a>
        </div>
    </section>

    <section id="tentang" class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="mb-3">Tentang Kami</h2>
                <h4 class="font-weight-bold mb-3 nama-hijau">Partner Petualangan Alam Terpercaya</h4>
                <p class="text-muted lead deskripsi-tentang mb-4">
                    Open trip ini akan dipandu langsung oleh tour guide dan mountain leader profesional yang
                    berpengalaman di berbagai medan. Komitmen kami adalah memberikan pengalaman open trip yang
                    terorganisir, aman, ramah pemula, dan penuh keseruan.
                </p>
            </div>
        </div>
    </section>

    <section id="proyek" class="container py-4">
        <h2>Destinasi Pilihan</h2>
        <div class="row mt-3">
            <!-- Kartu 1: Gunung Merbabu -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border border-2 shadow-sm rounded">
                    <div id="carouselGunung" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Gambar/MTMERBABU.JPG" class="d-block w-100" alt="Gunung 1">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/MTMERBABU2.JPG" class="d-block w-100" alt="Gunung 2">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/MTMERBABU3.JPG" class="d-block w-100" alt="Gunung 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselGunung" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselGunung" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Gunung Merbabu</h5>
                            <p class="card-text text-muted mb-1">Durasi : 2 Hari 1 Malam</p>
                            <p class="card-text text-muted mb-1">Harga Mulai Dari: IDR 450K/pax</p>
                            <p class="card-text text-muted mb-2">Tingkat Kesulitan : Menengah-Menantang</p>
                        </div>
                        <div>
                            <a href="https://maps.app.goo.gl/zQcXAmhxummzyrUL6" target="_blank" class="btn btn-outline-secondary btn-sm w-100 mb-2">📍 Lihat Lokasi</a>
                            <a href="#kontak" class="btn btn-success btn-sm w-100">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu 2: Ranu Kumbolo -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border border-2 shadow-sm rounded">
                    <div id="carousel2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Gambar/ranukumbolo3.jpg" class="d-block w-100" alt="Pantai 1">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/ranukumbolo2.jpg" class="d-block w-100" alt="Pantai 2">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/ranukumbolo.jpg" class="d-block w-100" alt="Pantai 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Ranu Kumbolo</h5>
                            <p class="card-text text-muted mb-1">Durasi : 3 Hari 2 Malam</p>
                            <p class="card-text text-muted mb-1">Harga Mulai Dari: IDR 850K-1.000K/pax</p>
                            <p class="card-text text-muted mb-2">Tingkat Kesulitan : Ringan–Menengah</p>
                        </div>
                        <div>
                            <a href="https://maps.app.goo.gl/B9QPX7NpEQm5Ei9Z6" target="_blank" class="btn btn-outline-secondary btn-sm w-100 mb-2">📍 Lihat Lokasi</a>
                            <a href="#kontak" class="btn btn-success btn-sm w-100">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu 3: Gunung Prau -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border border-2 shadow-sm rounded">
                    <div id="carouselHutan" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Gambar/PRAU1.JPG" class="d-block w-100" alt="Hutan 1">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/PRAU2.JPG" class="d-block w-100" alt="Hutan 2">
                            </div>
                            <div class="carousel-item">
                                <img src="Gambar/prauu.jpg" class="d-block w-100" alt="Hutan 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselHutan" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselHutan" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Gunung Prau</h5>
                            <p class="card-text text-muted mb-1">Durasi : 2 Hari 1 Malam</p>
                            <p class="card-text text-muted mb-1">Harga Mulai Dari: IDR 350K/pax</p>
                            <p class="card-text text-muted mb-2">Tingkat Kesulitan : Ringan–Menengah</p>
                        </div>
                        <div>
                            <a href="https://maps.app.goo.gl/iFMe11ZvCa4noGD89" target="_blank" class="btn btn-outline-secondary btn-sm w-100 mb-2">📍 Lihat Lokasi</a>
                            <a href="#kontak" class="btn btn-success btn-sm w-100">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Grafik Lingkaran Persentase Peminat Destinasi (Tanpa Kotak Luar) -->
    <div class="mt-4 text-left">
        <h5 class="mb-4 text-center font-weight-bold text-dark">Tingkat Peminat Berdasarkan Pemesanan</h5>

        <div class="circular-progress-container">
            <!-- Gunung Merbabu (85%) -->
            <div class="circular-card">
                <div class="circular-progress" style="--progress: 306deg;">
                    <span class="progress-value">85%</span>
                </div>
                <p>Merbabu</p>
            </div>

            <!-- Ranu Kumbolo (70%) -->
            <div class="circular-card">
                <div class="circular-progress" style="--progress: 252deg;">
                    <span class="progress-value">70%</span>
                </div>
                <p>Ranu Kumbolo</p>
            </div>

            <!-- Gunung Prau (80%) -->
            <div class="circular-card">
                <div class="circular-progress" style="--progress: 288deg;">
                    <span class="progress-value">80%</span>
                </div>
                <p>Prau</p>
            </div>
        </div>
    </div>
    </section>

    <section id="gear" class="container py-5">
        <h2 class="mb-5 text-center font-weight-bold">Fasilitas Yang Didapatkan</h2>
        <div class="row">
            <?php
            $query_fasilitas = mysqli_query($koneksi, "SELECT * FROM fasilitas");
            if ($query_fasilitas) {
                while ($row = mysqli_fetch_assoc($query_fasilitas)) {
            ?>
                <!-- Kartu Fasilitas Dinamis dari Database -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 facility-card">
                        <img src="Gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="Fasilitas"
                            style="height: 160px; object-fit: cover;">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title font-weight-bold text-success" style="font-size: 1.1rem;">
                                    <?php echo $row['nama_fasilitas']; ?>
                                </h5>
                                <p class="card-text text-muted small">
                                    <?php echo $row['deskripsi']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                }
            } 
            ?>
        </div>
    </section>

    <section id="kontak" class="container py-5">
        <div class="row justify-content-center g-4">
            <!-- Kotak Sisi Kiri: Connect With Me -->
            <div class="col-md-5 mb-4 mb-md-0 d-flex">
                <div class="card w-100 p-4 border border-2 shadow-sm rounded">
                    <h3 class="mb-3 font-weight-bold">Connect With Me</h3>
                    <p class="text-muted mb-4 small">Jangan ragu untuk terhubung melalui media sosial di bawah ini untuk
                        update trip terbaru.</p>

                    <div class="d-flex flex-column justify-content-between flex-grow-1">
                        <!-- Instagram -->
                        <a href="https://instagram.com/josefaarsanti_" target="_blank"
                            class="d-flex align-items-center text-dark text-decoration-none mb-3 p-3 border rounded shadow-sm social-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-3 text-success">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                            <div>
                                <h6 class="mb-0 font-weight-bold">Instagram</h6>
                                <small class="text-muted">@josefaarsanti_</small>
                            </div>
                        </a>

                        <!-- WhatsApp -->
                        <!-- GitHub -->
                        <a href="https://github.com/Josefaarsantikd" target="_blank"
                            class="d-flex align-items-center text-dark text-decoration-none p-3 border rounded shadow-sm social-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-3 text-success">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                </path>
                            </svg>
                            <div>
                                <h6 class="mb-0 font-weight-bold">GitHub</h6>
                                <small class="text-muted">Josefaarsantikd</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECTION: Form Booking -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h3 class="fw-bold mb-2">Booking</h3>
                    <p class="text-muted small">Isi formulir di bawah ini untuk memesan paket tripmu.</p>
                    
                    <form action="proses-booking.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="EMAIL" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="destinasi" required>
                                <option value="" disabled selected>Pilih Destinasi Trip...</option>
                                <option value="Prau">Prau</option>
                                <option value="Merbabu">Merbabu</option>
                                <option value="Ranu Kumbolo">Ranu Kumbolo</option>
                            </select>
                        </div>
                                            
                        <!-- Tambahan Input Tanggal & Jumlah Peserta yang Rapi -->
                        <div class="mb-3">
                            <label class="form-label text-muted small mb-1">Tanggal Keberangkatan</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="jumlah_peserta" placeholder="Jumlah Peserta (Contoh: 2)" min="1" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-100">Kirim Booking</button>
                    </form>
                </div>
            </div>

    <!-- SECTION: Riwayat Pesanan Trip (Bentuk Bubble/Card) -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-4 fw-bold">Riwayat Pesanan Trip Terbaru</h3>
                <div class="row g-3">
                    <?php
                    $query = "SELECT * FROM pesanan ORDER BY id DESC";
                    $result = mysqli_query($koneksi, $query);
                    
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 rounded-4 p-3 h-100 bg-light">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="fw-bold text-success mb-0"><?= htmlspecialchars($row['nama_peserta']) ?></h5>
                                            <span class="badge bg-success text-white rounded-pill px-3 py-2"><?= htmlspecialchars($row['destinasi']) ?></span>
                                        </div>
                                        <p class="text-muted small mb-2"><i class="bi bi-envelope"></i> <?= htmlspecialchars($row['email']) ?></p>
                                        <hr class="my-2">
                                        <div class="d-flex justify-content-between text-secondary small">
                                            <span><i class="bi bi-calendar"></i> <?= isset($row['tanggal']) ? htmlspecialchars($row['tanggal']) : '-' ?></span>
                                            <span><i class="bi bi-people"></i> <?= isset($row['jumlah_peserta']) ? htmlspecialchars($row['jumlah_peserta']) : '-' ?> Orang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<div class='col-12 text-center py-4 text-muted'>Belum ada data pesanan yang masuk.</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer yang Rapi -->
    <footer class="container text-center">
        <hr>
        <p class="text-muted small">&copy; 2026 OpenTrip Josefa. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Skrip Menu Active & Scroll Otomatis
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });

        window.addEventListener('scroll', function () {
            let scrollPos = window.scrollY + 120;
            let sections = document.querySelectorAll('section');
            sections.forEach(section => {
                let top = section.offsetTop;
                let height = section.offsetHeight;
                let id = section.getAttribute('id');
                if (scrollPos >= top && scrollPos < top + height) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>