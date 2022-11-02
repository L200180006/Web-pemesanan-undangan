<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>


    <div class="row">
        <div class="col-lg-9 mx-auto">
            <a class="btn btn-primary mb-3" href="<?= base_url('Kelola_pengguna/tambah_pengguna') ?>" role="button">Tambahkan Pengguna</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $u['name']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Kelola_pengguna/edit_user/' . $u['id']); ?>" class="badge badge-success">edit</a>
                                            <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="<?= base_url('Kelola_pengguna/delete_user/' . $u['id']); ?>" class="badge badge-danger">delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->