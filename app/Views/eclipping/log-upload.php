<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Log Upload e-Clipping</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($clipping as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $c['slug']; ?></td>
                            <td><?= $c['judul']; ?></td>
                            <td>
                                <a href="" class="btn btn-success"> Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>