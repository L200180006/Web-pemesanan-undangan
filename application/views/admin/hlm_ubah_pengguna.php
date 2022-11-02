<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($user as $u) { ?>

        <form class="col-lg-9 mx-auto" method="POST" action="<?= base_url('Kelola_pengguna/update_user'); ?>">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $u['id']; ?>">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $u['name']; ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $u['username']; ?>">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
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