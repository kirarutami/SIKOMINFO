<?= $this->extend("/flipbook-layout/flipbook-view-layout"); ?>
<?= $this->section('content'); ?>

<!-- PDF INFORMATION -->
<section class="info" id="info">
    <div class="container">
        <div class="card shadow">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>" class="w-100 book-1">
                </div>
                <div class="col-md-7 mt-3">
                    <!-- Info -->
                    <h3 id="title">COMPANY PROFILE</h3>
                    <p id="author" class="d-inline">Bilkis Ismail</p>
                    <p id="date" class="d-inline">26 April 2019</p>
                    <p id="size"><i class="fas fa-file "></i> File Size <b>1MB</b></p>
                    <!-- Button -->
                    <div class="button">
                        <a id="read" class="btn btn-primary mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
                        <a href="pdf/pdf.pdf" class="btn btn-primary mt-2 text-white" download>Unduh PDF <i class="fas fa-download fa-lg"></i></a>
                    </div>
                    <!-- Description -->
                    <p id="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quo velit consequuntur, iste, impedit dignissimos vitae nesciunt et commodi quos quis iusto est iure tenetur eum amet quas temporibus esse praesentium incidunt sequi ratione. Fuga ab quas itaque enim, molestiae, totam, necessitatibus magni dolores eligendi obcaecati libero omnis iste. Facilis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF PDF INFORMATION -->

<?= $this->endSection(); ?>