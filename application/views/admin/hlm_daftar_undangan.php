<?php
// $pchenter=explode("\r\n",$_POST['deskripsi']);
// $textout = "";
// for ($i=0; $i <=count($pchenter)-1 ; $i++) { 
//     $pchpart = str_replace($pchenter[$i],"<br>".$pchenter[$i],$pchenter[$i]);
//     $textout .= $pchpart;
// }
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="mx-auto">
            <a class="btn btn-primary mb-3" href="<?= base_url('Kelola_undangan/tambah_undangan') ?>" role="button">Tambahkan Undangan</a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Undangan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Tampak Depan</th>
                                    <th>Tampak Belakang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($undangan as $undangan) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $undangan['judul']; ?></td>
                                        <td><?= nl2br(htmlspecialchars($undangan['deskripsi'])); ?></td>
                                        <td><?= $undangan['harga']; ?></td>
                                        <td><img src="<?= base_url('assets/img/upload/') . $undangan['gambar']; ?>" width="200"></td>
                                        <td><img src="<?= base_url('assets/img/upload/') . $undangan['gambar_1']; ?>" width="200"></td>
                                        <td>
                                            <a href="<?= base_url('Kelola_undangan/edit_undangan/' . $undangan['id_undangan']); ?>" class="badge badge-success">edit</a>
                                            <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="<?= base_url('Kelola_undangan/hapus_undangan/' . $undangan['id_undangan']); ?>" class="badge badge-danger">delete</a>
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