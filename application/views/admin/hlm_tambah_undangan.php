<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= form_open_multipart('Kelola_undangan/tambah_undangan'); ?>
    <div class="col-lg-9 mx-auto">
        <div class="p-5">
            <div class="form-group">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Undangan" value="<?= set_value('judul'); ?>">
                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi'); ?>"></textarea>
                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= set_value('harga'); ?>">
                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <div class="custom-file col-lg-7">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file col-lg-7">
                    <input type="file" class="custom-file-input" id="gambar_1" name="gambar_1">
                    <label class="custom-file-label" for="gambar_1">Pilih Gambar</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Tambahkan Undangan
                </button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->