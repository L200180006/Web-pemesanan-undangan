<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($undangan as $undangan) { ?>

        <form class="col-lg-9 mx-auto" method="POST" action="<?= base_url('Kelola_undangan/update_undangan'); ?>">
            <div class="form-group">
                <input type="hidden" name="id_undangan" id="id_undangan" value="<?= $undangan['id_undangan']; ?>">
                <label>Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Undangan" value="<?= $undangan['judul']; ?>">
                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?= $undangan['deskripsi']; ?>">
                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $undangan['harga']; ?>">
                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <div class="custom-file col-lg-7">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <input type="hidden" name="id_undangan" id="id_undangan" value="<?= $undangan['id_undangan']; ?>">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/upload/') . $undangan['gambar']; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/upload/') . $undangan['gambar_1']; ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php } ?>

</div>
</div>
</div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->