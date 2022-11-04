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
    <div class="container-fluid py-5 px-5 col-md-10">
        <h2 class="display-5 mb-4">SYARAT & KETENTUAN</h2>
        <h5 class="mb-5 text-body">
            <p>Setiap pemesanan undangan pernikahan di SAE UNDANGAN harus melakukan langkah pembayaran seperti yang tertuang dalam poin-poin berikut. Anda harus membaca dengan seksama dan setuju dengan ketentuan-ketentuan ini.</p>
        </h5>
        <h2 class="display-5 mb-4">UANG MUKA</h2>
        <table>
            <tr valign="top">
                <td>1. </td>
                <td>Pembayaran untuk UANG MUKA (DP) sebesar Rp 300.000,- (tiga ratus ribu rupiah) adalah komitmen yang berfungsi sebagai tanda jadi order sampai proses pembuatan desain selesai. Apabila desain sudah diproses, maka order tidak dapat dibatalkan, atau uang muka tersebut tidak dapat dikembalikan.</td>
            </tr>
            <tr valign="top">
                <td>2. </td>
                <td>Pembayaran untuk PROSES CETAK sebesar 50% sisa dari total pembayaran. Adalah ketika desain sudah mendapatkan persetujuan/ACC dari pembeli untuk proses cetak. Apabila proses cetak sudah dikerjakan, maka uang 50% sisa dari total pembayaran tidak dapat dikembalikan.</td>
            </tr>
            <tr valign="top">
                <td>3. </td>
                <td>Pembayaran untuk PELUNASAN total dari semua sisa tagihan termasuk ongkos pengiriman. Dilakukan untuk pengambilan barang/undangan yang telah selesai.</td>
            </tr>
            <tr valign="top">
                <td>4. </td>
                <td>Jika Anda merasa langkah pembayaran diatas terlalu panjang, Anda dapat melakukan dengan cara yang lebih fleksibel. Yaitu langsung melunasi atau DP sebesar 50% dari total tagihan.</td>
            </tr>
        </table>
        <h2 class="display-5 mb-4 mt-3">Pembayaran</h2>
        <table>
            <tr valign="top">
                <td>1. </td>
                <td>Pembayaran dapat dilakukan dengan cara tunai dan disetorkan kepada customer service DWI PUTRA PRODUCTIONS.</td>
            </tr>
            <tr valign="top">
                <td>2. </td>
                <td>Pembayaran dapat dilakukan melalui transfer bank, dan Anda harus melakukan konfirmasi dengan menyertakan bukti transfer kepada customer service kami.</td>
            </tr>
            <tr valign="top">
                <td>3. </td>
                <td>Apabila Anda telah melakukan transfer dana, tetapi dana tersebut belum masuk ke rekening kami, maka order belum dapat kami proses hingga dana tersbeut benar-benar sudah masuk.</td>
            </tr>
            <tr valign="top">
                <td>4. </td>
                <td>Perlu diketahui transfer antar bank yang berbeda kadang membutuhkan waktu lebih dari 1×24 jam untuk bisa masuk ke rekening kami. Anda dapat menghubungi bank yang bersangkutan apabila dana tersebut gagal masuk ke rekening kami.</td>
            </tr>
            <tr valign="top">
                <td>5. </td>
                <td>Mintalah bukti pembayaran kepada customer service kami untuk dokumentasi Anda.</td>
            </tr>
        </table>
    </div>
    <!-- Content End -->