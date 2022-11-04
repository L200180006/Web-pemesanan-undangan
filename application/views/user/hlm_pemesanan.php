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
                    <a href="<?= base_url('user/produk'); ?>" class="nav-item nav-link active">Produk</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
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
    <?php
    function number_with_dot($number, $sign = false)
    {
        if ($sign) {
            return 'Rp ' . number_format($number, 0, ',', '.');
        }
        return number_format($number, 0, ',', '.');
    }
    ?>
    <!-- Content Start -->
    <div class="container-fluid py-5 px-5">
        <?php foreach ($undangan as $undangan) { ?>

            <form class="col-lg-6 mx-auto" method="POST" action="<?= base_url('User/buat_pesanan'); ?>">
                <div class="form-group mb-2">
                    <input type="hidden" name="id_undangan" id="id_undangan" value="<?= $undangan['id_undangan']; ?>">
                    <label>Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Undangan" value="<?= $undangan['judul']; ?>" readonly>
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-2">
                    <label>Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" readonly><?= $undangan['deskripsi']; ?></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-2">
                    <label>Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="Rp <?= number_with_dot($undangan['harga']); ?>" readonly>
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            <?php } ?>
            <div class="form-group mb-2">
                <label>Nama Pemesan</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" placeholder="Masukkan nama anda" value="<?= set_value('nama_pemesan'); ?>">
                <?= form_error('nama_pemesan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-3">
                <label>Nomor Telepon</label>
                <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan Nomor Telepon" value="<?= set_value('no_telepon'); ?>">
                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
    </div>
    <!-- Content End -->