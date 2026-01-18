<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - VisiTech</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0033cc;
            --accent-color: #ff9900;
            --dark-bg: #0a0a23;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: white;
            color: #333;
            overflow-x: hidden;
        }

        /* NAVBAR (Konsisten) */
        .navbar {
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .navbar-brand img {
            height: 70px;
            width: auto;
        }
        .nav-link {
            font-weight: 500;
            color: #333;
            margin: 0 5px;
            transition: 0.3s;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
        }

        /* TOMBOL KONTAK NAVBAR */
        .btn-contact {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 51, 204, 0.3);
            transition: 0.3s;
        }
        .btn-contact:hover {
            background-color: #002699;
            transform: translateY(-2px);
            color: white;
        }

        /* PAGE HEADER (Parallax Effect) */
        .page-header {
            background: linear-gradient(rgba(10, 10, 35, 0.85), rgba(0, 51, 204, 0.85)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Kunci Parallax */
            color: white;
            padding: 150px 0;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        .page-header h1 {
            font-weight: 800;
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        /* STORY SECTION */
        .story-section {
            padding: 100px 0;
        }
        .story-img {
            border-radius: 20px;
            box-shadow: 20px 20px 0px var(--light-bg);
            transition: 0.5s;
        }
        .story-img:hover {
            transform: scale(1.02);
            box-shadow: 10px 10px 0px var(--accent-color);
        }

        /* VISION MISSION CARDS */
        .vm-section {
            background-color: var(--light-bg);
            padding: 100px 0;
            position: relative;
        }
        .vision-card {
            background: white;
            border: none;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: 0.4s;
            border-top: 5px solid var(--primary-color);
        }
        .vision-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .mission-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            font-weight: 500;
            color: #555;
        }
        .mission-list i {
            color: var(--accent-color);
            margin-right: 15px;
            font-size: 1.2rem;
        }

        /* STATS SECTION */
        .stats-section {
            background: linear-gradient(135deg, var(--dark-bg), #1a1a40);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        /* Hiasan background stats */
        .stats-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--accent-color);
            margin-bottom: 10px;
        }
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        /* TEAM SECTION */
        .team-member {
            margin-bottom: 40px;
            text-align: center;
        }
        .member-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: 0.3s;
            height: 100%;
        }
        .member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .member-img-wrapper {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--light-bg);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .member-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }
        .member-card:hover .member-img {
            transform: scale(1.1);
        }
        .social-links a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            background: var(--light-bg);
            border-radius: 50%;
            color: var(--primary-color);
            margin: 0 5px;
            transition: 0.3s;
            text-decoration: none;
        }
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
        }

        /* CTA SECTION */
        .cta-section {
            background: #eef2ff;
            padding: 80px 0;
            text-align: center;
        }

        /* FOOTER (Konsisten) */
        footer {
            background-color: var(--dark-bg);
            color: white;
            padding-top: 80px;
            padding-bottom: 20px;
        }
        footer h5 {
            color: var(--accent-color);
            font-weight: 700;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }
        footer ul {
            padding-left: 0;
            list-style: none;
        }
        footer ul li {
            margin-bottom: 12px;
        }
        footer a {
            color: #ccc;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }
        footer a:hover {
            color: var(--accent-color);
            padding-left: 8px;
        }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 50px;
            padding-top: 25px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/1.png" alt="Logo VisiTech"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="layanan.php">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="paket.php">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="order.php">Order</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tentang.php">Tentang Kami</a></li>
                </ul>
                <a href="https://wa.me/6285156326643" class="btn btn-contact rounded-pill ms-3">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <header class="page-header">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="display-4 fw-bold">Mengenal VisiTech</h1>
            <p class="lead">Inovasi, Integritas, dan Solusi Digital Terpadu.</p>
        </div>
    </header>

    <section class="story-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1000&auto=format&fit=crop" class="img-fluid story-img" alt="Tim VisiTech">
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="1000">
                    <h5 class="text-primary fw-bold text-uppercase mb-3">Cerita Kami</h5>
                    <h2 class="fw-bold mb-4">Lebih Dari Sekadar Jasa IT</h2>
                    <p class="text-muted lead mb-4">
                        VisiTech lahir dari sebuah gagasan sederhana: <strong>Teknologi seharusnya memudahkan, bukan menyulitkan.</strong>
                    </p>
                    <p class="mb-4">
                        Bermula dari semangat mahasiswa yang melihat celah antara kebutuhan perangkat keras (Hardware) dan solusi digital (Software), kami hadir sebagai jembatan. Kami menyadari bahwa banyak bisnis membutuhkan partner yang tidak hanya bisa merakit komputer, tetapi juga membangun sistem di dalamnya.
                    </p>
                    <p>
                        Kini, VisiTech berkembang menjadi penyedia layanan <em>One-Stop IT Solution</em> yang melayani perorangan hingga UMKM, dengan pendekatan yang personal, transparan, dan edukatif.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="vm-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="vision-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle me-3 shadow-sm">
                                <i class="bi bi-eye-fill fs-3"></i>
                            </div>
                            <h3 class="fw-bold mb-0">Visi Kami</h3>
                        </div>
                        <p class="lead fst-italic text-secondary">
                            "Menjadi mitra teknologi terintegrasi terdepan yang menghadirkan solusi digital dan infrastruktur IT yang handal, guna mendorong transformasi bisnis dan masyarakat menuju era digital yang lebih efisien dan aman."
                        </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="vision-card" style="border-top-color: var(--accent-color);">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning text-white p-3 rounded-circle me-3 shadow-sm">
                                <i class="bi bi-rocket-takeoff-fill fs-3"></i>
                            </div>
                            <h3 class="fw-bold mb-0">Misi & Nilai Utama</h3>
                        </div>
                        <ul class="list-unstyled mission-list">
                            <li><i class="bi bi-check-circle-fill"></i> Integrasi Tanpa Batas (Software & Hardware)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Kemudahan Akses Layanan</li>
                            <li><i class="bi bi-check-circle-fill"></i> Transparansi & Integritas Tinggi</li>
                            <li><i class="bi bi-check-circle-fill"></i> Standar Kualitas Profesional</li>
                            <li><i class="bi bi-check-circle-fill"></i> Edukasi Digital Berkelanjutan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-number">3+</div>
                    <div class="stat-label">Proyek Selesai</div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Kepuasan Klien</div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support System</div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Divisi Utama</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <div class="mb-5" data-aos="fade-up">
                <h5 class="text-primary fw-bold text-uppercase">Tim Ahli</h5>
                <h2 class="fw-bold">Otak di Balik Inovasi</h2>
            </div>
            
            <div class="row justify-content-center g-4">
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-card">
                        <div class="member-img-wrapper">
                            <img src="img/default.jpg" class="member-img" alt="Foto Member 1">
                        </div>
                        <h5 class="fw-bold">Ibram Raka Wicaksana</h5>
                        <p class="text-primary fw-bold mb-2 small">Chief Executive Officer</p>
                        <p class="text-muted small mb-3">Memimpin visi strategis dan pengembangan bisnis VisiTech.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-card">
                        <div class="member-img-wrapper">
                            <img src="img/default.jpg" class="member-img" alt="Foto Member 2">
                        </div>
                        <h5 class="fw-bold">Nathaniel Shalom</h5>
                        <p class="text-primary fw-bold mb-2 small">Lead Software Engineer</p>
                        <p class="text-muted small mb-3">Bertanggung jawab atas arsitektur website dan aplikasi klien.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-github"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-card">
                        <div class="member-img-wrapper">
                            <img src="img/default.jpg" class="member-img" alt="Foto Member 3">
                        </div>
                        <h5 class="fw-bold">Leonardo Rizky</h5>
                        <p class="text-primary fw-bold mb-2 small">Software Engineer</p>
                        <p class="text-muted small mb-3">Pengembang fitur interaktif dan optimasi sistem.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-card">
                        <div class="member-img-wrapper">
                            <img src="img/default.jpg" class="member-img" alt="Foto Member 4">
                        </div>
                        <h5 class="fw-bold">Ferdinand Dinata</h5>
                        <p class="text-primary fw-bold mb-2 small">Hardware Specialist</p>
                        <p class="text-muted small mb-3">Ahli dalam perakitan PC, instalasi CCTV, dan infrastruktur jaringan.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container" data-aos="zoom-in">
            <h3 class="fw-bold mb-3">Ingin berkolaborasi dengan kami?</h3>
            <p class="lead mb-4 text-muted">Kami siap mewujudkan solusi digital impian Anda.</p>
            <a href="order.php" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Hubungi Kami</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">VisiTech</h5> 
                    <p class="text-white-50">Partner IT terpercaya untuk kebutuhan Hardware, Software, dan Keamanan Digital. Melayani area Semarang dan sekitarnya dengan layanan Home Service.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="layanan.php">Layanan</a></li>
                        <li><a href="produk.php">Produk</a></li>
                        <li><a href="paket.php">Paket</a></li>
                        <li><a href="project.php">Project</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="tentang.php">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Hubungi Kami</h5>
                    <p><i class="bi bi-whatsapp me-2 text-warning"></i> +62 851-5632-6643</p>
                    <p><i class="bi bi-envelope-fill me-2 text-warning"></i> info@visitech.id</p>
                    <p><i class="bi bi-geo-alt-fill me-2 text-warning"></i> Semarang, Jawa Tengah</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="mb-0">&copy; 2026 VisiTech. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 120,
            duration: 800
        });
    </script>
</body>
</html>