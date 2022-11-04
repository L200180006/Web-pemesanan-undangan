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
                <input type="text" class="form-control number-cleave" id="harga" name="harga" placeholder="Harga" value="<?= set_value('harga'); ?>">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js" integrity="sha512-SvgzybymTn9KvnNGu0HxXiGoNeOi0TTK7viiG0EGn2Qbeu/NFi3JdWrJs2JHiGA1Lph+dxiDv5F9gDlcgBzjfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var row = 0;
    var edit = 0;

    $('.number-cleave').toArray().forEach(function(field) {
        new Cleave(field, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand',
            numeralDecimalMark: ',',
            delimiter: '.'
        });
    });

    function number_with_dot(x) {
        var parts = x.toString().split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        return parts.join('.');
    }

    function remove_dot(text) {
        text = text ?? '';
        return text.toString().replace(/\./g, '');
    }

    $('#harga').on('keyup change', function() {
        var harga = remove_dot($(this).val());
        harga = $.isNumeric(harga) ? parseInt(harga) : 0;

        $('#harga').val(number_with_dot(harga));
    });
</script>