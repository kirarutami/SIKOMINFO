<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class mt-2>Detail e-Clipping</h2>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= isset($clipping['judul']); ?></h5>
                    <!-- i'm adding isset that i don't even understand what was that -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <br><br>
                    <a href="/clipping" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>