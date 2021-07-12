<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Tambah e-Clipping</h2>
            <form action="/clipping/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>
" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>

                <!-- //ini row buat upload nanti -->
                <div class="row mb-3">
                    <label for="file" class="col-sm-2 col-form-label">Upload File</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="file" name="file" value="<?= old('file'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>