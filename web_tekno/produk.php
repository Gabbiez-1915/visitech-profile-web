<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk & Sparepart - VisiTech</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0033cc;
            --accent-color: #ff9900;
            --dark-bg: #0a0a23;
            --light-bg: #f4f6f9;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            overflow-x: hidden;
        }

        /* NAVBAR */
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

        /* TOMBOL KONTAK NAVBAR (Sesuai Index) */
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

        /* PAGE HEADER (Disamakan dengan Index/Layanan) */
        .page-header {
            background: linear-gradient(rgba(0,51,204,0.8), rgba(10,10,35,0.9)), url('https://images.unsplash.com/photo-1451187580505-522831340985?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 50px;
        }
        .page-header h1 {
            font-weight: 800;
            font-size: 3rem;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        /* FILTER BUTTONS */
        .filter-buttons {
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .btn-filter {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: white;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .btn-filter:hover, .btn-filter.active {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 51, 204, 0.2);
        }

        /* PRODUCT CARD */
        .product-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            height: 100%;
            overflow: hidden;
            position: relative;
            top: 0;
        }
        .product-card:hover {
            top: -10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .product-img-wrapper {
            height: 220px;
            overflow: hidden;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            border-bottom: 1px solid #eee;
        }
        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-card:hover .product-img-wrapper img {
            transform: scale(1.1); /* Efek Zoom */
        }
        .product-body {
            padding: 25px;
            text-align: center;
        }
        .product-category {
            font-size: 0.75rem;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .product-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }
        .product-desc {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .btn-wa {
            background: linear-gradient(45deg, #25D366, #128C7E);
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }
        .btn-wa:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
            color: white;
        }

        /* ANIMASI FADE IN FILTER */
        .product-item {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* FOOTER (Sesuai Index) */
        footer {
            background-color: var(--dark-bg);
            color: white;
            padding-top: 80px;
            padding-bottom: 20px;
            margin-top: 80px;
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
                    <li class="nav-item"><a class="nav-link active" href="produk.php">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="paket.php">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="order.php">Order</a></li>
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
            <h1>Katalog Produk & Sparepart</h1>
            <p class="lead">Sedia komponen berkualitas untuk PC, Laptop, CCTV, dan Jaringan.</p>
        </div>
    </header>

    <div class="container">
        
        <div class="filter-buttons" data-aos="fade-up" data-aos-delay="200">
            <button class="btn btn-filter active" onclick="filterProduk('all')">Semua Produk</button>
            <button class="btn btn-filter" onclick="filterProduk('pc')">Komponen PC</button>
            <button class="btn btn-filter" onclick="filterProduk('laptop')">Part Laptop</button>
            <button class="btn btn-filter" onclick="filterProduk('cctv')">CCTV & Security</button>
            <button class="btn btn-filter" onclick="filterProduk('jaringan')">Jaringan/Network</button>
        </div>

        <div class="row g-4" id="productContainer">
            
            <div class="col-6 col-md-3 product-item pc" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/ssd.jpg" alt="SSD NVMe">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Komponen PC</div>
                        <h5 class="product-title">SSD NVMe 512GB</h5>
                        <p class="product-desc">Kecepatan baca/tulis tinggi. Booting Windows dijamin ngebut.</p>
                        <a href="https://wa.me/6285156326643?text=Halo%20VisiTech,%20saya%20mau%20pesan%20SSD%20NVMe" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item pc" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/ram.jpg" alt="RAM DDR4">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Komponen PC</div>
                        <h5 class="product-title">RAM DDR4 8GB/16GB</h5>
                        <p class="product-desc">Multitasking lancar tanpa lag. Garansi Lifetime Distributor.</p>
                        <a href="https://wa.me/6285156326643?text=Halo%20VisiTech,%20saya%20mau%20pesan%20RAM" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item laptop" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/lcd.jpg" alt="Layar Laptop">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Komponen Laptop</div>
                        <h5 class="product-title">LCD/LED Screen</h5>
                        <p class="product-desc">Tersedia untuk berbagai tipe (14", 15.6", Slim/Tebal). Original.</p>
                        <a href="https://wa.me/6285156326643?text=Halo,%20saya%20mau%20tanya%20LCD%20Laptop" class="btn btn-wa"><i class="bi bi-chat-text"></i> Tanya Stok</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item laptop" data-aos="fade-up" data-aos-delay="400">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/keyboard.jpg" alt="Keyboard Laptop">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Komponen Laptop</div>
                        <h5 class="product-title">Keyboard Original</h5>
                        <p class="product-desc">Ganti keyboard error atau tombol copot. Presisi dan empuk.</p>
                        <a href="https://wa.me/6285156326643?text=Halo,%20saya%20mau%20tanya%20Keyboard%20Laptop" class="btn btn-wa"><i class="bi bi-chat-text"></i> Tanya Stok</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item cctv" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/kamera.jpg" alt="Kamera CCTV">
                    </div>
                    <div class="product-body">
                        <div class="product-category">CCTV Part</div>
                        <h5 class="product-title">Kamera Outdoor 5MP</h5>
                        <p class="product-desc">Tahan air (IP66), gambar jernih siang & malam (Infrared).</p>
                        <a href="https://wa.me/6285156326643?text=Saya%20minat%20Kamera%20CCTV%20Outdoor" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item cctv" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/dvr.jpg" alt="DVR CCTV"> 
                    </div>
                    <div class="product-body">
                        <div class="product-category">CCTV Part</div>
                        <h5 class="product-title">DVR 4/8 Channel</h5>
                        <p class="product-desc">Perekam CCTV support online ke HP. Mudah setting dan stabil.</p>
                        <a href="https://wa.me/6285156326643?text=Saya%20minat%20DVR%20CCTV" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item cctv" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/power supply.jpg" alt="PSU CCTV">
                    </div>
                    <div class="product-body">
                        <div class="product-category">CCTV Part</div>
                        <h5 class="product-title">PSU Jaring (10A/20A)</h5>
                        <p class="product-desc">Stabilkan arus listrik ke kamera CCTV agar awet dan aman.</p>
                        <a href="https://wa.me/6285156326643?text=Saya%20minat%20PSU%20CCTV" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item jaringan" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/kabel lan.jpg" alt="Kabel LAN">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Network</div>
                        <h5 class="product-title">Kabel LAN UTP Cat6</h5>
                        <p class="product-desc">High speed transfer data. Dijual ecer per meter atau roll.</p>
                        <a href="https://wa.me/6285156326643?text=Saya%20minat%20Kabel%20LAN%20Cat6" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 product-item jaringan" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="img/rj45.jpg" alt="RJ45">
                    </div>
                    <div class="product-body">
                        <div class="product-category">Network</div>
                        <h5 class="product-title">Konektor RJ45 & Plug</h5>
                        <p class="product-desc">Konektor berkualitas, pin emas, tidak mudah korosi.</p>
                        <a href="https://wa.me/6285156326643?text=Saya%20minat%20Konektor%20RJ45" class="btn btn-wa"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
                    </div>
                </div>
            </div>

        </div> 
        
        <div class="text-center mt-5 p-5 bg-white rounded shadow-sm border border-light" data-aos="fade-up">
            <h3 class="fw-bold mb-3">Tidak menemukan sparepart yang dicari?</h3>
            <p class="text-muted lead mb-4">Kami memiliki akses ke distributor besar. Tanyakan kebutuhan spesifik Anda langsung ke admin.</p>
            <a href="https://wa.me/6285156326643?text=Halo%20Admin,%20saya%20mau%20cari%20sparepart..." class="btn btn-outline-primary rounded-pill px-5 py-2">Hubungi Admin Stok</a>
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
            offset: 100
        });

        function filterProduk(kategori) {
            let produkItems = document.querySelectorAll('.product-item');
            let buttons = document.querySelectorAll('.btn-filter');

            // Set Active Button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            // Filter Logic with Animation Reset
            produkItems.forEach(item => {
                // Reset animation to trigger it again
                item.style.animation = 'none';
                item.offsetHeight; /* trigger reflow */
                item.style.animation = null; 

                if (kategori === 'all') {
                    item.style.display = 'block';
                } else {
                    if (item.classList.contains(kategori)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        }
    </script>
</body>
</html>