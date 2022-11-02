<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DWI PUTRA - Produk</title>
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
                            <a href="<?= base_url('user/pemesanan'); ?>" class="dropdown-item">Pemesanan</a>
                            <a href="<?= base_url('user/pembayaran'); ?>" class="dropdown-item">Pembayaran</a>
                        </div>
                    </div>
                    <a href="<?= base_url('kontak'); ?>" class="nav-item nav-link me-2">Kontak</a>
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
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-3 mt-3">Katalog <span class="text-primary">Produk</span></h1>
    </div>
    <div class="container mx-auto">
        <div class="row">
            <?php $i = 1; ?>
            <?php foreach ($undangan as $undangan) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card position-relative" style="width: 15rem;">
                        <img src="<?= base_url('assets/img/upload/') . $undangan['gambar']; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $undangan['judul']; ?></h5>
                            <p class="card-text"><?= number_with_dot($undangan['harga'], true); ?></p>
                            <a href="<?= base_url('User/detail_undangan/') . $undangan['id_undangan']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Content End -->

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="<?= base_url('user'); ?>" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"></i>Dwi Putra</h1>
                </a>
                <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <a class="text-white-50 mb-3" href="<?= base_url('Login'); ?>"><i class="fa fa-angle-right me-2"></i></a>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="<?= base_url('user'); ?>"><i class="fa fa-angle-right me-2"></i>Home</a>
                            <a class="text-white-50 mb-2" href="<?= base_url('user/tentang'); ?>"><i class="fa fa-angle-right me-2"></i>Tentang Kami</a>
                            <a class="text-white-50 mb-2" href="<?= base_url('user/layanan'); ?>"><i class="fa fa-angle-right me-2"></i>Layanan</a>
                            <a class="text-white-50" href="<?= base_url('user/kontak'); ?>"><i class="fa fa-angle-right me-2"></i>Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Dwi Putra Production</a>. All Rights Reserved.</p>
            </div>
            <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-dark" href="https://htmlcodex.com">Bachtiar Nuhri</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/easing/easing.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('asset/'); ?>vendor/js/main.js"></script>
</body>

</html>