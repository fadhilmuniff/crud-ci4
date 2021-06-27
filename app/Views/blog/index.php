<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blog as $b) : ?>
                        <tr>
                            <th scope="row"><?= $b['id']; ?></th>
                            <td>
                                <img src="/img/<?= $b['sampul']; ?>" class="sampul">
                            </td>
                            <td><?= $b['judul']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Ubah</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>