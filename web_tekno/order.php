<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pemesanan & Order - VisiTech</title>
    
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
            background-color: var(--light-bg);
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

        /* PAGE HEADER */
        .page-header {
            background: linear-gradient(135deg, var(--dark-bg), var(--primary-color));
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            overflow: hidden;
        }
        .page-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: var(--light-bg);
            transform: skewY(-3deg);
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-weight: 800;
            color: var(--dark-bg);
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 5px;
            background: var(--accent-color);
            margin: 15px auto;
            border-radius: 50px;
        }

        /* TUTORIAL CARDS (STEPS) */
        .step-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            height: 100%;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: 0.3s;
            position: relative;
            z-index: 1;
        }
        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 51, 204, 0.15);
        }
        .step-icon {
            width: 80px;
            height: 80px;
            background: #eef2ff;
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 25px;
            transition: 0.3s;
        }
        .step-card:hover .step-icon {
            background: var(--primary-color);
            color: white;
        }
        .step-number {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--accent-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            border: 4px solid var(--light-bg);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        /* FORM STYLES */
        .form-wrapper {
            background: white;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }
        /* Hiasan background form */
        .form-wrapper::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: var(--accent-color);
            border-radius: 50%;
            opacity: 0.1;
        }
        .form-control, .form-select {
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            margin-bottom: 25px;
            font-size: 0.95rem;
            transition: 0.3s;
            background-color: #f9f9f9;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            background-color: white;
            box-shadow: 0 0 0 4px rgba(0, 51, 204, 0.1);
        }
        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 10px;
        }
        
        /* BUTTONS */
        .btn-wa-order {
            background: linear-gradient(45deg, #25D366, #128C7E);
            color: white;
            font-weight: 700;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 50px;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
        }
        .btn-wa-order:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(37, 211, 102, 0.4);
            color: white;
        }
        .btn-email-order {
            background-color: transparent;
            color: #666;
            font-weight: 600;
            border: 2px solid #ddd;
            padding: 15px;
            width: 100%;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-email-order:hover {
            background-color: #f1f1f1;
            color: #333;
            border-color: #ccc;
        }

        /* FOOTER (Konsisten) */
        footer {
            background-color: var(--dark-bg);
            color: white;
            padding-top: 80px;
            padding-bottom: 20px;
            margin-top: 100px;
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
                    <li class="nav-item"><a class="nav-link active" href="order.php">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang Kami</a></li>
                </ul>
                <a href="https://wa.me/6285156326643" class="btn btn-contact rounded-pill ms-3">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <header class="page-header">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="fw-bold">Pusat Pemesanan</h1>
            <p class="lead text-white-50">Langkah mudah untuk mendapatkan solusi IT terbaik.</p>
        </div>
    </header>

    <div class="container">

        <h2 class="section-title" data-aos="fade-up">Alur Pemesanan</h2>
        
        <div class="row g-4 mb-5 pb-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon"><i class="bi bi-search"></i></div>
                    <h5 class="fw-bold">Pilih Layanan</h5>
                    <p class="text-muted small">Tentukan kebutuhan Anda (Website, PC, CCTV, dll).</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon"><i class="bi bi-pencil-square"></i></div>
                    <h5 class="fw-bold">Isi Formulir</h5>
                    <p class="text-muted small">Lengkapi data diri pada form order di bawah ini.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon"><i class="bi bi-whatsapp"></i></div>
                    <h5 class="fw-bold">Konfirmasi</h5>
                    <p class="text-muted small">Admin akan membalas pesan Anda dengan rincian biaya.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-icon"><i class="bi bi-credit-card"></i></div>
                    <h5 class="fw-bold">Pengerjaan</h5>
                    <p class="text-muted small">Setelah deal/DP, teknisi kami langsung bekerja.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-8">
                <div class="form-wrapper">
                    <h3 class="text-center fw-bold mb-3">Formulir Order Cepat</h3>
                    <p class="text-center text-muted mb-5">Kami merekomendasikan order via WhatsApp untuk respon tercepat.</p>

                    <form id="orderForm">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Contoh: Budi Santoso" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" id="nomor" placeholder="Contoh: 08123456789" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori Layanan</label>
                            <select class="form-select" id="layanan">
                                <option value="Konsultasi Umum" selected>Konsultasi Umum (Tanya Dulu)</option>
                                <option value="Pembuatan Website">Jasa Pembuatan Website</option>
                                <option value="Pembuatan Aplikasi">Jasa Pembuatan Aplikasi</option>
                                <option value="Rakit PC">Rakit PC Custom</option>
                                <option value="Service Laptop/PC">Service Laptop/PC/Maintenance</option>
                                <option value="Instalasi CCTV">Pasang CCTV</option>
                                <option value="Instalasi Jaringan">Instalasi Jaringan/WiFi</option>
                                <option value="Pembelian Sparepart">Beli Sparepart/Produk</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Detail Pesanan / Keluhan</label>
                            <textarea class="form-control" id="pesan" rows="5" placeholder="Jelaskan spesifikasi yang diinginkan atau kendala kerusakan perangkat Anda..." required></textarea>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-7">
                                <button type="button" onclick="kirimWhatsApp()" class="btn btn-wa-order">
                                    <i class="bi bi-whatsapp me-2"></i> Kirim ke WhatsApp (Fast Respon)
                                </button>
                            </div>
                            <div class="col-md-5">
                                <button type="button" class="btn btn-email-order" disabled>
                                    <i class="bi bi-envelope me-2"></i> Kirim Email (Maintenance)
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

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

        // ==========================================
        // SCRIPT WHATSAPP
        // ==========================================
        const adminPhone = "6285156326643"; 
        // ==========================================

        function kirimWhatsApp() {
            // 1. Ambil Nilai dari Form
            let nama = document.getElementById('nama').value;
            let nomorUser = document.getElementById('nomor').value;
            let layanan = document.getElementById('layanan').value;
            let pesan = document.getElementById('pesan').value;

            // 2. Cek apakah kosong?
            if(nama === "" || pesan === "") {
                alert("Harap lengkapi Nama dan Detail Pesanan Anda!");
                return;
            }

            // 3. Susun Pesan Rapi
            let textWA = `*HALO ADMIN VISITECH,*%0A%0ASaya ingin melakukan order/konsultasi.%0A%0A--------------------------------%0A*DATA PEMESAN*%0A--------------------------------%0A👤 *Nama:* ${nama}%0A📱 *No. HP:* ${nomorUser}%0A🛠️ *Layanan:* ${layanan}%0A%0A📝 *DETAIL PESANAN:*%0A${pesan}%0A%0A--------------------------------%0AMohon responnya, terima kasih.`;

            // 4. Buka Link API WhatsApp
            window.open(`https://api.whatsapp.com/send?phone=${adminPhone}&text=${textWA}`, '_blank');
        }
    </script>
</body>
</html>