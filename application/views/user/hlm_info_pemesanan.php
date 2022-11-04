<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DWI PUTRA - Pemesanan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?= base_url('asset/'); ?>vendor/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>vendor/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?= base_url('asset/'); ?>vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="<?= base_url('user'); ?>" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white">DWI PUTRA</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('user'); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= base_url('user/tentang'); ?>" class="nav-item nav-link">Tentang Kami</a>
                    <a href="<?= base_url('user/produk'); ?>" class="nav-item nav-link">Produk</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('user/info_pemesanan'); ?>" class="dropdown-item">Pemesanan</a>
                            <a href="<?= base_url('user/infor_pembayaran'); ?>" class="dropdown-item">Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container-fluid py-5 px-5">
        <h2 class="display-5 mb-4"><span class="text-primary">Offline</span> Store</h2>
        <h5 class="mb-5 text-body">
            <p>Jl. Amarta Raya, Pulosari, Sroyo, Kec. Jaten, Kabupaten Karanganyar, Jawa Tengah 57731</p>
        </h5>
        <hr>
        <h2 class="display-5 mb-4 mt-3">Pemesanan <span class="text-primary">Online</span></h2>
        <h5 class="mb-5 text-body">
            <p>1. Klik menu produk</p>
            <p>2. Klik tombol "Detail" pada desain undangan yang anda inginkan</p>
            <p>3. Pilih "Pesan Undangan"</p>
            <p>4. Masukkan nama dan nomor telepon anda</p>
            <p>5. Pilih "Pesan"</p>
        </h5>
        <h5 class="mb-5 text-body">
            <p>Atau anda dapat menghubungi kami melalui Whatsapp di 081229333222</p>
        </h5>
    </div>
    <!-- Content End -->