<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <?php if (session()->getFlashData('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashData('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card-header">
                    <b> List Produk </b>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="<?= base_url('pages/tambahProduk') ?>" c>Tambah Produk</a>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($produk as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>
                                        <img width="100" src="<?= base_url('uploads/produk/' . $p['gambar']); ?>">
                                    </td>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['deskripsi'] ?></td>
                                    <td>Rp <?= number_format($p['harga']) ?></td>
                                    <td><?= $p['stok'] ?></td>
                                    <td><?php if ($p['status'] == 1) : ?>
                                            <div class="badge badge-success"> Aktif</div>
                                        <?php else : ?>
                                            <div class="badge badge-danger">Tidak Aktif</div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('pages/delete/' . $p['id'])  ?>" class="btn btn-outline-danger" onclick="return confirm('yakin?');">Delete</a>
                                        <a href="<?= base_url('pages/editProduk/' . $p['id'])  ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php $i; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>