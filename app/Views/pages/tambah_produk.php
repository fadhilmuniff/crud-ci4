<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card shadow  mb-5 bg-white rounded">
                <div class="card-header bg-primary text-white">
                    <h5> Tambah Produk </h5>
                </div>
                <div class="card-body">

                    <form action="/pages/save" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi Produk"></textarea required>
                        </div>
                        <div class="form-group">
                            <label for="title">Harga</label>
                            <input style="width: 400px;" type="number" name="harga" class="form-control" placeholder="Rp"required>
                        </div>
                        <div class="form-group">
                            <label for="title">Stok</label>
                            <input style="width: 400px;" type="number" name="stok" class="form-control" placeholder=""required>
                        </div>
                        <div class="">
                            <label for="title">Gambar</label>
                            <input style="width: 400px;" type="file" name="gambar" class="form-control" required>
                        </div>


                        <div class="form-group">
                        </div>
                        <button type="submit" name="status" value="published" class="btn btn-primary btn-block">Tambah Produk</button>
                        <!-- <br> -->
                        <a href="<?= base_url() ?>" type="submit" name="" value="draft" class="btn btn-light btn-block ">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>