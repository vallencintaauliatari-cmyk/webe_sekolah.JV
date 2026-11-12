<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK PGRI WLINGI - Website Resmi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        :root {
            --primary-blue: #1a5276;
            --light-blue: #ebf5fb;
            --text-grey: #6c757d;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        .navbar-nav .nav-link {
            color: #333;
            margin: 0 5px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-blue) !important;
            font-weight: 600;
        }

        .navbar-nav .nav-link.active {
            border-bottom: 3px solid var(--primary-blue);
        }

        .hero-section {
            height: 350px;
            position: relative;
        }

        .hero-section .carousel-inner,
        .hero-section .carousel-item {
            height: 350px;
        }

        .hero-section .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(26, 82, 118, 0.95);
            color: white;
            padding: 15px;
            width: 100%;
            border-top-right-radius: 10px;
            z-index: 10;
        }

        @media (min-width: 768px) {
            .hero-caption {
                width: 50%;
                padding: 25px 35px;
            }
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 20px;
        }

        .section-title {
            border-left: 5px solid var(--primary-blue);
            padding-left: 15px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .img-kepsek {
            width: 150px;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .img-thumbnail-news {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
            flex-shrink: 0;
        }

        .img-kegiatan {
            height: 150px;
            width: 100%;
            object-fit: cover;
        }

        .news-list-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 12px 0;
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }

        .news-list-item:hover {
            background-color: var(--light-blue);
        }

        .news-date {
            font-size: 0.75rem;
            color: var(--text-grey);
        }

        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 40px 0 20px;
        }

        .footer a {
            color: #a9cce3;
            text-decoration: none;
        }

        .footer a:hover {
            color: white;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
        }

        @media (max-width: 767.98px) {

            .hero-section,
            .hero-section .carousel-inner,
            .hero-section .carousel-item {
                height: 300px;
            }

            .hero-caption {
                padding: 15px;
            }

            .hero-caption h4 {
                font-size: 1.05rem;
            }

            .img-kepsek {
                width: 130px;
                height: 160px;
                margin-right: 0 !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="#beranda">
                <i class="fas fa-school fa-2x me-2" style="color: var(--primary-blue);"></i>

                <div>
                    <h5 class="mb-0 fw-bold" style="color: var(--primary-blue);">
                        SMK PGRI WLINGI
                    </h5>

                    <small class="text-muted" style="font-size: 0.7rem; letter-spacing: 1px;">
                        Membentuk Karakter Siswa Siap Kerja
                    </small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Buka navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#profil" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#sambutan">
                                    Sambutan Kepala Sekolah
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#profil-sekolah">
                                    Tentang Sekolah
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#akademik" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#akademik">
                                    Kurikulum
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#akademik">
                                    Jurusan
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kesiswaan">Kesiswaan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#pengumuman">Berita</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">Galeri</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- SLIDER BERANDA -->
    <section id="beranda">
        <div id="heroCarousel" class="carousel slide hero-section" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner h-100">

                <div class="carousel-item active h-100">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQekmhxKWnVc_k8gUEaTznqRSCC9pO6az6DfT3y5yG-ySg1Dt3hnfcL0x7h&s=10"
                        class="d-block w-100 h-100" alt="Banner sekolah 1">
                </div>

                <div class="carousel-item h-100">
                    <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/WhatsApp%20Image%202025-11-03%20at%2012.04.05_1762148611.jpg"
                        class="d-block w-100 h-100" alt="Banner sekolah 2">
                </div>

                <div class="carousel-item h-100">
                    <img src="https://www.gamelab.id/uploads/modules/4%20(15).jpg?1640245414313"
                        class="d-block w-100 h-100" alt="Banner sekolah 3">
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
                aria-label="Foto sebelumnya">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
                aria-label="Foto berikutnya">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Next</span>
            </button>

            <div class="hero-caption">
                <h4 class="fw-bold mb-2 fs-5">
                    Selamat Datang di Website Sekolah
                </h4>

                <p class="mb-0 small">
                    Bersama kita wujudkan generasi yang cerdas,
                    berakhlak dan berprestasi
                </p>
            </div>
        </div>
    </section>

    <!-- KONTEN UTAMA -->
    <main class="container my-4 my-md-5">

        <div class="row g-4">

            <!-- SAMBUTAN KEPALA SEKOLAH -->
            <div class="col-lg-8" id="sambutan">
                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h5 class="section-title">
                        Sambutan Kepala Sekolah
                    </h5>

                    <div class="d-flex flex-column flex-md-row mt-4">
                        <img src="https://i.ytimg.com/vi/XjmNoA9cb6s/maxresdefault.jpg"
                            class="img-kepsek me-md-4 mb-3 mb-md-0" alt="Kepala Sekolah">

                        <div>
                            <h5 class="fw-bold">
                                Kepala SMK PGRI WLINGI
                            </h5>

                            <p class="text-muted small">
                                Kepala Sekolah
                            </p>

                            <p>
                                Assalamu'alaikum warahmatullahi wabarakatuh.
                                Selamat datang di website resmi SMK PGRI WLINGI.
                                Website ini menjadi sarana informasi sekolah,
                                kegiatan pembelajaran, prestasi siswa, dan
                                berbagai informasi pendidikan.
                            </p>

                            <p>
                                Kami berkomitmen untuk memberikan pendidikan
                                terbaik agar peserta didik memiliki karakter
                                yang baik, keterampilan yang kompeten, serta
                                siap menghadapi tantangan masa depan.
                            </p>

                            <p class="mb-0">
                                Wassalamu'alaikum warahmatullahi wabarakatuh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PENGUMUMAN -->
            <div class="col-lg-4" id="pengumuman">
                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h5 class="section-title">Pengumuman Terbaru</h5>

                    <div class="news-list-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQekmhxKWnVc_k8gUEaTznqRSCC9pO6az6DfT3y5yG-ySg1Dt3hnfcL0x7h&s=10"
                            class="img-thumbnail-news me-3" alt="Informasi sekolah">

                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                Informasi Penerimaan Peserta Didik Baru
                            </h6>

                            <span class="news-date">
                                <i class="far fa-calendar-alt me-1"></i>
                                Informasi Sekolah
                            </span>
                        </div>

                        <i class="fas fa-chevron-right text-muted ms-2"></i>
                    </div>

                    <div class="news-list-item">
                        <img src="https://www.gamelab.id/uploads/modules/2%20(28).jpg?1640245441122"
                            class="img-thumbnail-news me-3" alt="Informasi kegiatan">

                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                Informasi Kegiatan Sekolah
                            </h6>

                            <span class="news-date">
                                <i class="far fa-calendar-alt me-1"></i>
                                Informasi Kegiatan
                            </span>
                        </div>

                        <i class="fas fa-chevron-right text-muted ms-2"></i>
                    </div>

                    <div class="news-list-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHwggSWavd3p4KGSO69I2b_WnnYbAKHewQtxIG_u2gKvGcqXMZrOTBJbY&s=10"
                            class="img-thumbnail-news me-3" alt="Informasi daftar ulang">

                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                Fakta Biaya Daftar Ulang
                            </h6>

                            <span class="news-date">
                                <i class="far fa-calendar-alt me-1"></i>
                                25 Mar 2025
                            </span>
                        </div>

                        <i class="fas fa-chevron-right text-muted ms-2"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#pengumuman" class="btn btn-outline-primary w-100 fw-bold"
                            style="color: var(--primary-blue);
                                  border-color: var(--primary-blue);">

                            Lihat Semua Pengumuman
                            <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KEGIATAN TERBARU -->
        <div class="row mt-4" id="kegiatan">
            <div class="col-12">
                <div class="bg-white p-4 rounded shadow-sm">

                    <div
                        class="d-flex justify-content-between
                                align-items-center mb-4 flex-wrap">

                        <h5 class="section-title mb-0">
                            Kegiatan Terbaru
                        </h5>

                        <a href="#kegiatan" class="text-decoration-none fw-bold mt-2 mt-sm-0"
                            style="color: var(--primary-blue);">

                            Lihat Semua Kegiatan
                            <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2
                                row-cols-lg-4 g-4">

                        <!-- KEGIATAN 1 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">

                                <img src="https://www.gamelab.id/uploads/modules/2%20(28).jpg?1640245441122"
                                    class="card-img-top img-kegiatan" alt="Upacara Hari Pendidikan Nasional">

                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">
                                        Upacara Hari Pendidikan Nasional
                                    </h6>

                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        02 Mei 2025
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- KEGIATAN 2 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">

                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnpCXWxSGaK6xDJAasiut66oRhZD_tFMNFT1PC_DkGRc9tGvcHcgZhN5k&s=10"
                                    class="card-img-top img-kegiatan" alt="Kegiatan Ekstrakurikuler Pramuka">

                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">
                                        Kegiatan Ekstrakurikuler Pramuka
                                    </h6>

                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        28 Apr 2025
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- KEGIATAN 3 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">

                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnJ4jjWFsGrVqLAsF43eFg0iPP23lBFPFAyO6ocXM22vx4Le0s_ZiuJD1U&s=10"
                                    class="card-img-top img-kegiatan" alt="Lomba Seni">

                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">
                                        Lomba Seni
                                    </h6>

                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        23 Mei 2026
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- KEGIATAN 4 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">

                                <img src="https://www.gamelab.id/uploads/modules/4%20(15).jpg?1640245414313"
                                    class="card-img-top img-kegiatan" alt="Kunjungan Industri">

                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">
                                        Kunjungan Industri
                                    </h6>

                                    <small class="text-muted">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        15 Apr 2025
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- PROFIL, AKADEMIK, KESISWAAN -->
        <div class="row g-4 mt-4">

            <!-- PROFIL SEKOLAH -->
            <section class="col-md-4" id="profil-sekolah">
                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h5 class="section-title">Profil Sekolah</h5>

                    <p>
                        SMK PGRI WLINGI berkomitmen memberikan pendidikan
                        kejuruan untuk membentuk siswa yang berkarakter,
                        kompeten, mandiri, dan siap menghadapi dunia kerja.
                    </p>

                    <h6 class="fw-bold">Visi</h6>

                    <p>
                        Menjadi sekolah kejuruan yang unggul dalam prestasi,
                        karakter, keterampilan, dan teknologi.
                    </p>

                    <h6 class="fw-bold">Misi</h6>

                    <ul class="mb-0">
                        <li>Meningkatkan kualitas pembelajaran.</li>
                        <li>Membentuk karakter siswa.</li>
                        <li>Mengembangkan keterampilan.</li>
                    </ul>

                </div>
            </section>

            <!-- AKADEMIK -->
            <section class="col-md-4" id="akademik">
                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h5 class="section-title">Akademik</h5>

                    <p>
                        Kegiatan pembelajaran mendukung pengembangan
                        pengetahuan, keterampilan, sikap, dan kreativitas
                        siswa.
                    </p>

                    <ul class="mb-0">
                        <li>Pengembangan Perangkat Lunak</li>
                        <li>Teknik Jaringan</li>
                        <li>Manajemen Bisnis</li>
                    </ul>

                </div>
            </section>

            <!-- KESISWAAN -->
            <section class="col-md-4" id="kesiswaan">
                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h5 class="section-title">Kesiswaan</h5>

                    <ul class="mb-0">
                        <li>OSIS</li>
                        <li>Pramuka</li>
                        <li>Seni dan Budaya</li>
                        <li>Olahraga</li>
                    </ul>

                </div>
            </section>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer mt-5" id="kontak">
        <div class="container">

            <div class="row">

                <!-- IDENTITAS SEKOLAH -->
                <div class="col-md-4 mb-4 text-center text-md-start">

                    <div
                        class="d-flex align-items-center
                                justify-content-center
                                justify-content-md-start mb-3">

                        <i class="fas fa-school fa-2x me-2"></i>

                        <div>
                            <h5 class="mb-0 fw-bold">
                                SMK PGRI WLINGI
                            </h5>

                            <small class="text-white-50"
                                style="font-size: 0.7rem;
                                          letter-spacing: 1px;">
                                Membentuk Karakter Siswa Siap Kerja
                            </small>
                        </div>
                    </div>

                    <p class="small text-white-50">
                        Mencetak generasi yang unggul, berkarakter,
                        dan berprestasi di era digital.
                    </p>
                </div>

                <!-- KONTAK -->
                <div class="col-md-4 mb-4 text-center text-md-start">

                    <h6 class="fw-bold mb-3">Hubungi Kami</h6>

                    <ul class="list-unstyled small">
                        <li class="mb-2">
                            <i class="fas fa-globe me-2"></i>
                            Website: www.smkpgriwlingi.sch.id
                        </li>

                        <li class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            Email: info@smkpgriwlingi.sch.id
                        </li>

                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i>
                            Telp: (021) 1234567
                        </li>
                    </ul>

                    <div class="social-icons">
                        <a href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div
                    class="col-md-4 mb-4 d-flex flex-column
                            justify-content-center justify-content-md-end
                            text-center text-md-end">

                    <p class="small text-white-50 mb-1">
                        © {{ date('Y') }} SMK PGRI WLINGI.
                        All rights reserved.
                    </p>

                    <p class="small text-white-50 mb-0">
                        Powered by
                        <a href="#">jejeemoet vallen cccnntk</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menandai menu aktif berdasarkan bagian yang dipilih
        document.querySelectorAll('.navbar-nav a[href^="#"]')
            .forEach(function(link) {

                link.addEventListener('click', function() {

                    document.querySelectorAll('.navbar-nav .nav-link')
                        .forEach(function(nav) {
                            nav.classList.remove('active');
                        });

                    if (this.classList.contains('nav-link')) {
                        this.classList.add('active');
                    }
                });
            });
    </script>

</body>

</html>
