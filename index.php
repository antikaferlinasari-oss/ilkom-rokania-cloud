<?php
include 'koneksi.php';

// Ambil data visi, misi, dan tujuan dari database
$query = "SELECT * FROM visi_misi";
$result = mysqli_query($conn, $query);

$visi = [];
$misi = [];
$tujuan = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['kategori'] == 'visi') {
            $visi[] = $row['konten'];
        } elseif ($row['kategori'] == 'misi') {
            $misi[] = $row['konten'];
        } elseif ($row['kategori'] == 'tujuan') {
            $tujuan[] = $row['konten'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi Ilmu Komputer - Universitas Rokania</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/hima_ilkom.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
        }
        .card-custom {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ILKOM ROKANIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi-misi">Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tujuan">Tujuan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Program Studi Ilmu Komputer</h1>
            <p class="lead">Universitas Rokania - Unggul, Berdaya Saing, dan Berkarakter</p>
        </div>
    </header>

    <!-- Profil Section -->
    <section id="profil" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Profil Program Studi</h2>
            <p class="text-center lead">Program Studi Ilmu Komputer Universitas Rokania berfokus pada pengembangan keahlian mahasiswa di bidang rekayasa perangkat lunak, komputasi awan (cloud computing), kecerdasan buatan, dan keamanan siber guna mencetak lulusan yang siap bersaing di era digital.</p>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section id="visi-misi" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Visi -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100 p-4">
                        <h3 class="fw-bold text-primary">Visi</h3>
                        <p class="mt-2">
                            <?php 
                            if (!empty($visi)) {
                                echo $visi[0];
                            } else {
                                echo "Menjadi Program Studi Ilmu Komputer yang unggul, berdaya saing, dan berkarakter dalam pengembangan teknologi informasi di tingkat nasional pada tahun 2030.";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <!-- Misi -->
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100 p-4">
                        <h3 class="fw-bold text-success">Misi</h3>
                        <ol class="mt-2">
                            <?php 
                            if (!empty($misi)) {
                                foreach ($misi as $m) {
                                    echo "<li>$m</li>";
                                }
                            } else {
                                echo "<li>Menyelenggarakan pendidikan dan pembelajaran berkualitas di bidang Ilmu Komputer.</li>";
                                echo "<li>Melaksanakan penelitian inovatif yang bermanfaat bagi ilmu pengetahuan dan masyarakat.</li>";
                                echo "<li>Melakukan pengabdian kepada masyarakat berbasis teknologi informasi.</li>";
                            }
                            ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tujuan Section -->
    <section id="tujuan" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Tujuan</h2>
            <div class="card card-custom p-4">
                <ul>
                    <?php 
                    if (!empty($tujuan)) {
                        foreach ($tujuan as $t) {
                            echo "<li>$t</li>";
                        }
                    } else {
                        echo "<li>Menghasilkan lulusan yang kompeten, beretika, dan siap bersaing di dunia kerja maupun kewirausahaan.</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer / Kontak -->
    <footer id="kontak" class="bg-dark text-white py-4 text-center">
        <div class="container">
            <p class="mb-1"><strong>Universitas Rokania</strong></p>
            <p class="mb-1">Jl. Raya Pasir Pengaraian km. 15, Langkitin, Rambah Samo, Rokan Hulu, Riau</p>
            <p class="mb-0">&copy; 2026 Program Studi Ilmu Komputer - Universitas Rokania</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>