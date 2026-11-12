<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK PGRI WLINGI - Website Resmi</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        :root {
            --primary-blue: #1a5276; 
            --light-blue: #ebf5fb;   
            --text-grey: #6c757d;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden; 
        }

        /* Navbar */
        .navbar-nav .nav-link.active {
            color: var(--primary-blue) !important;
            font-weight: 600;
            border-bottom: 3px solid var(--primary-blue);
        }
        .navbar-nav .nav-link {
            color: #333;
            margin: 0 5px;
        }

        /* Hero Section (Slider) */
        .hero-section {
            height: 350px;
            position: relative;
        }
        .carousel-item {
            height: 350px;
        }
        
        /* Caption Overlay */
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

        /* Navigasi Panah Slider */
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.5);
            border-radius: 50%;
            padding: 20px;
        }

        /* Section Titles */
        .section-title {
            border-left: 5px solid var(--primary-blue);
            padding-left: 15px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        /* Garis Abu-abu (Teks Dummy) */
        .placeholder-line {
            height: 12px;
            background-color: #e2e8f0;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        .w-100 { width: 100%; }
        .w-75 { width: 75%; }
        .w-50 { width: 50%; }

        /* Pengaturan Foto agar Tidak Gepeng */
        .img-kepsek {
            width: 150px;
            height: 180px;
            object-fit: cover; 
            border-radius: 8px;
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

        /* Card Pengumuman */
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

        /* Footer */
        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 40px 0 20px 0;
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
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- HEADER / NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-school fa-2x me-2" style="color: var(--primary-blue);"></i>
                <div>
                    <h5 class="mb-0 fw-bold" style="color: var(--primary-blue);">SMK PGRI WLINGI</h5>
                    <small class="text-muted" style="font-size: 0.7rem; letter-spacing: 1px;">Membentuk Karakter Siswa Siap Kerja</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akademik</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="#">Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Kesiswaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (SL <IDER FOTO BANNER) -->
    <divspan id="heroCarousel" class="carousel slide hero-section" data-bs-ride="carousel class">
        <div class="car="ousel-indicators">
            <button type="visbutton" data-bs-target="#heroCarouselually" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner h-100">
            <!-- Slide 1 -->
            <div class="carousel-item active h-100">
                <!-- Ganti src di bawah dengan {{ asset('gambar/banner1.jpg') }} -->
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQekmhxKWnVc_k8gUEaTznqRSCC9pO6az6DfT3y5yG-ySg1Dt3hnfcL0x7h&s=10" class="d-block w-100 h-100" style="object-fit: cover;" alt="Banner 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item h-100">
                <img src="https://smkpgriwlingi.sch.id/gambar/dropzone/WhatsApp%20Image%202025-11-03%20at%2012.04.05_1762148611.jpg" class="d-block w-100 h-100" style="object-fit: cover;" alt="Banner 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item h-100">
                <img src="https://www.gamelab.id/uploads/modules/4%20(15).jpg?1640245414313" class="d-block w-100 h-100" style="object-fit: cover;" alt="Banner 3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           -hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="hero-caption">
            <h4 class="fw-bold mb-2 fs-5 fs-md-4">Selamat Datang di Website Sekolah</h4>
            <p class="mb-0 small">Bersama kita wujudkan generasi yang cerdas, berakhlak dan berprestasi</p>
        </div>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="container my-4 my-md-5">
        <div class="row g-4">
            
            <!-- KOLOM KIRI: Sambutan Kepala Sekolah -->
            <div class="col-lg-8">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="section-title">Sambutan Kepala Sekolah</h5>
                    
                    <div class="d-flex flex-column flex-md-row mt-4 align-items-center align-items-md-start text-center text-md-start">
                        
                        <!-- FOTO KEPALA SEKOLAH -->
                        <!-- Ganti src di bawah dengan {{ asset('gambar/kepsek.jpg') }} -->
                        <img src="https://i.ytimg.com/vi/XjmNoA9cb6s/maxresdefault.jpg" class="img-kepsek mb-3 mb-md-0 me-md-4" alt="Kepala Sekolah">
                        
                        <div class="flex-grow-1 w-100">
                            <h6 class="fw-bold mb-3">Assalamu'alaikum Wr. Wb.</h6>
                            <p> Assalamu’alaikum warahmatullahi wabarakatuh.

Yang saya hormati Bapak/Ibu Guru dan staf sekolah, serta anak-anak siswa yang saya banggakan.

Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa karena atas rahmat-Nya kita dapat berkumpul dalam keadaan sehat untuk mengikuti kegiatan ini.

Saya mengucapkan terima kasih kepada seluruh pihak yang telah berpartisipasi dan mendukung terlaksananya kegiatan ini. Saya berharap kegiatan ini dapat memberikan manfaat, menambah pengalaman, serta meningkatkan semangat dan kreativitas siswa.

Kepada seluruh siswa, saya berpesan agar mengikuti kegiatan dengan tertib, penuh semangat, dan tetap menjaga nama baik sekolah.

Demikian sambutan yang dapat saya sampaikan. Semoga kegiatan ini berjalan lancar dan memberikan hasil yang baik bagi kita semua.

Wassalamu’alaikum warahmatullahi wabarakatuh.</p>
                            
                            <div class="text-center text-md-end mt-4">
                                <p class="fw-bold mb-0"> Drs. Bambang Setiyono, S.T., M.Pd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN: Pengumuman Terbaru -->
            <div class="col-lg-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5 class="section-title">
                        <i class="fas fa-bullhorn text-primary me-2"></i>Pengumuman Terbaru
                    </h5>
                    
                    <div class="mt-4">
                        <!-- Pengumuman 1 -->
                        <div class="news-list-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmHAptldoizIPspeDI1SAq93F4YG5FMxmJLUQ7fFz14VyAM3PoDM3fD7XD&s=10" class="img-thumbnail-news me-3" alt="Thumbnail">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026</h6>
                                <span class="news-date"><i class="far fa-calendar-alt me-1"></i>15 Apr 2025</span>
                            </div>
                            <i class="fas fa-chevron-right text-muted ms-2"></i>
                        </div>
                        
                        <!-- Pengumuman 2 -->
                        <div class="news-list-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStENkREJ94FUIxK4rw_VozAvNAnWTMe203r1D121WvUo_MC79YPqkgZyg&s=10" class="img-thumbnail-news me-3" alt="Thumbnail">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Recruitmen osis 2024/2025</h6>
                                <span class="news-date"><i class="far fa-calendar-alt me-1"></i>10 Apr 2025</span>
                            </div>
                            <i class="fas fa-chevron-right text-muted ms-2"></i>
                        </div>
                        
                        <!-- Pengumuman 3 -->
                        <div class="news-list-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHwggSWavd3p4KGSO69I2b_WnnYbAKHewQtxIG_u2gKvGcqXMZrOTBJbY&s=10" class="img-thumbnail-news me-3" alt="Thumbnail">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Fakta biaya daftar ulang</h6>
                                <span class="news-date"><i class="far fa-calendar-alt me-1"></i>25 Mar 2025</span>
                            </div>
                            <i class="fas fa-chevron-right text-muted ms-2"></i>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary w-100 fw-bold" style="color: var(--primary-blue); border-color: var(--primary-blue);">
                            Lihat Semua Pengumuman <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BARIS KEDUA: Kegiatan Terbaru -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                        <h5 class="section-title mb-0">Kegiatan Terbaru</h5>
                        <a href="#" class="text-decoration-none fw-bold mt-2 mt-sm-0" style="color: var(--primary-blue);">Lihat Semua Kegiatan <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="https://www.gamelab.id/uploads/modules/2%20(28).jpg?1640245441122" class="card-img-top img-kegiatan" alt="Kegiatan">
                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">Upacara Hari Pendidikan Nasional</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt me-1"></i>02 Mei 2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnpCXWxSGaK6xDJAasiut66oRhZD_tFMNFT1PC_DkGRc9tGvcHcgZhN5k&s=10" class="card-img-top img-kegiatan" alt="Kegiatan">
                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">Kegiatan Ekstrakurikuler Pramuka</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt me-1"></i>28 Apr 2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnJ4jjWFsGrVqLAsF43eFg0iPP23lBFPFAyO6ocXM22vx4Le0s_ZiuJD1U&s=10" class="card-img-top img-kegiatan" alt="Kegiatan">
                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">Lomba Seni </h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt me-1"></i>23 mei 2026</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="https://www.gamelab.id/uploads/modules/4%20(15).jpg?1640245414313" class="card-img-top img-kegiatan" alt="Kegiatan">
                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-1" style="font-size: 0.9rem;">Kunjungan industri</h6>
                                    <small class="text-muted"><i class="far fa-calendar-alt me-1"></i>15 Apr 2025</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 text-center text-md-start">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                        <i class="fas fa-school fa-2x me-2"></i>
                        <div>
                            <h5 class="mb-0 fw-bold">SMK PGRI WLINGI</h5>
                            <small class="text-white-50" style="font-size: 0.7rem; letter-spacing: 1px;">Membentuk Karakter Siswa Siap Kerja</small>
                        </div>
                    </div>
                    <p class="small text-white-50">Mencetak generasi yang unggul, berkarakter, dan berprestasi di era digital.</p>
                </div>
                <div class="col-md-4 mb-4 text-center text-md-start">
                    <h6 class="fw-bold mb-3">Hubungi Kami</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="fas fa-globe me-2"></i>Website: www.smkpgriwlingi.sch.id</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i>Email: info@smkpgriwlingi.sch.id</li>
                        <li class="mb-3"><i class="fas fa-phone me-2"></i>Telp: (021) 1234567</li>
                    </ul>
                    <div class="social-icons justify-content-center justify-content-md-start">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex flex-column justify-content-center justify-content-md-end text-center text-md-end">
                    <p class="small text-white-50 mb-1">© 2025 SMK PGRI WLINGI. All rights reserved.</p>
                    <p class="small text-white-50 mb-0">Powered by <a href="#">jejeemoet vallen cccnntk</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>