<?= $this->extend("/flipbook-layout/flipbook-template"); ?>
<?= $this->section('content'); ?>

<!-- PDF HERE -->
<!-- <h1 class="mt-1 align-middle">Sistem Informasi Kliping Online Media Informasi</h1> -->
<div class="bookshelf mt-5">
    <div class="covers">

        <?php
        foreach ($clipping as $c) :
        ?>

            <div class="thumb">
                <label><?= $c['judul'] ?></label>
                <a href="/flipbook/detail/<?= $c['id']; ?>">
                    <img src="<?= base_url('flipbook/images/sampul.png') ?>">
                </a>

            </div>
        <?php endforeach; ?>

    </div>
    <img class="shelf-img" src="<?= base_url('flipbook/images/shelf_wood.png') ?>">
</div>
<br>

<!-- <div class="bookshelf">
    <div class="covers">
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
    </div>
    <img class="shelf-img" src="<?= base_url('flipbook/images/shelf_glass.png') ?>">
</div>
<div class="bookshelf">
    <div class="covers">
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
        <div class="thumb book-1">
            <a href="/flipbook/detail">
                <img src="<?= base_url('flipbook/images/book2/1.jpg') ?>">
            </a>
        </div>
    </div>
    <img class="shelf-img" src="<?= base_url('flipbook/images/shelf_metal.png') ?>">
</div> -->


<?= $pager->links('log_upload', 'flipbook_pagination'); ?>
<!-- End Of PDF -->


<?= $this->endSection(); ?>