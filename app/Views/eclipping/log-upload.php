<?= $this->extend("/layout/template"); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Log Upload e-Clipping</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif ?>

                <!-- DataTables -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data e-Clipping Indragiri Hulu</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Uploader</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($clipping as $c) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $c['slug']; ?></td>
                                            <td><?= $c['judul']; ?></td>
                                            <td><?= $c['status']; ?></td>
                                            <td><?= $c['uploaded_by']; ?></td>
                                            <td>
                                                <form action="/flipbook/detail/<?= $c['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method">
                                                    <button type="submit" class="btn btn-info">Lihat e-Clipping</button>
                                                </form>
                                                <?php if (in_groups('superadmin')) : ?>
                                                    <form action="/clipping/hapus/<?= $c['id']; ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">Hapus</button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

<?= $this->endSection(); ?>