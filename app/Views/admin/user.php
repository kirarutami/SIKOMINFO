<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <h1 class="mt-2">User List</h1>

    <!-- DataTables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Administrator SIKOMINFO</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $u->username; ?></td>
                                <td><?= $u->email; ?></td>
                                <td><?= $u->name; ?></td>
                                <td>
                                    <form action="<?= base_url('admin/' . $u->userid); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method">
                                        <button type="submit" class="btn btn-info">Lihat Profil</button>
                                    </form>
                                    <form action="<?= base_url('admin/hapus/' . $u->userid); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>