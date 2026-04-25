<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScholarTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .main-wrapper {
            background-color: #ffffff;
            max-width: 1400px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .testimonial-img {
            width: 85px;
            height: 85px;
            object-fit: cover;
        }

        .logo-section {
            background-color: #cdd1d5;
            padding: 40px 0;
        }

        .partner-logo {
            max-height: 40px;
            filter: grayscale(100%);
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        .section-title {
            letter-spacing: 2px;
            color: #212529;
        }

        .quote-text {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="main-wrapper mt-5 pb-0">
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-5 section-title">Testimoni Pengguna</h2>

            <div class="row g-5 px-lg-5 mb-5">
                <div class="col-lg-6 d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Profil Mahasiswa" class="rounded-circle testimonial-img shadow-sm">
                    <div class="ms-4">
                        <p class="fst-italic quote-text mb-3">"ScholarTrack benar-benar mengubah cara saya mencari bantuan dana pendidikan. Mencari beasiswa yang transparan dan jujur sekarang jauh lebih mudah."</p>
                        <h6 class="fw-bold text-uppercase mb-0">Sarah Jenkins</h6>
                        <span class="text-muted small">Mahasiswa Ilmu Komputer</span>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profil Donatur" class="rounded-circle testimonial-img shadow-sm">
                    <div class="ms-4">
                        <p class="fst-italic quote-text mb-3">"Sebagai penyalur dana, transparansi adalah hal utama. Platform ini memastikan bahwa setiap rupiah sampai ke tangan yang tepat tanpa adanya birokrasi yang berbelit-belit. Sangat akuntabel"</p>
                        <h6 class="fw-bold text-uppercase mb-0">David Chen</h6>
                        <span class="text-muted small">Direktur Yayasan Pendidikan</span>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Profil Mahasiswa" class="rounded-circle testimonial-img shadow-sm">
                    <div class="ms-4">
                        <p class="fst-italic quote-text mb-3">"Antarmukanya sangat intuitif dan mudah digunakan. Saya bisa mendaftar ke tiga program berbeda hanya dalam satu waktu, sehingga waktu yang dikeluarkan untuk ini sangat efisien"</p>
                        <h6 class="fw-bold text-uppercase mb-0">Amanda Putri</h6>
                        <span class="text-muted small">Mahasiswa Desain UI/UX</span>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Profil Admin" class="rounded-circle testimonial-img shadow-sm">
                    <div class="ms-4">
                        <p class="fst-italic quote-text mb-3">"Dulu mengelola ribuan pendaftar adalah mimpi buruk bagi kami. Dengan sistem dashboard yang terintegrasi, proses seleksi menjadi jauh lebih cepat, adil, dan terorganisir dengan sangat baik."</p>
                        <h6 class="fw-bold text-uppercase mb-0">Budi Santoso</h6>
                        <span class="text-muted small">Petugas Bantuan Keuangan Universitas</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-section">
            <div class="container">
                <div class="row text-center align-items-center justify-content-center g-4">
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo" class="partner-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google Logo" class="partner-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" alt="Cisco Logo" class="partner-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft Logo" class="partner-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM Logo" class="partner-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg" alt="Meta Logo" class="partner-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
