<?= $this->extend("/layout/template"); ?>
<?= $this->section('content'); ?>

<script type="text/javascript">
    function PreviewImg() {
        pdffile1 = document.getElementById("file").files[0];
        pdffile_url1 = URL.createObjectURL(pdffile1);
        $('#viewer').attr('src', pdffile_url1);
    }
</script>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Tambah e-Clipping</h2>
            <form action="/clipping/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <!-- Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <!-- Tukang Upload -->
                <div class="row mb-3">
                    <label for="uploaded_by" class="col-sm-2 col-form-label">Diupload Oleh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="uploaded_by" name="uploaded_by" autofocus value="<?= user()->fullname; ?>" readonly>
                    </div>
                </div>
                <!-- Deskripsi -->
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" autofocus value="<?= old('deskripsi'); ?>">
                    </div>
                </div>
                <!-- Upload File -->
                <div class="row mb-3">
                    <label for="file" class="col-sm-2 col-form-label">Upload File</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" class="form-control <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" name="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04" >Preview</button> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="tooltip" data-placement="right" title="Lihat Surat Pengantar" data-target="#pilihPDF" onclick="PreviewImg();">Preview</button>
                            <div class="modal fade" id="pilihPDF" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Preview PDF</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="clear:both">
                                                <iframe id="viewer" frameborder="1" scrolling="no" width="470" height="600"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('file'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name='status' id='status' value='Pengajuan e-Clipping'>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>