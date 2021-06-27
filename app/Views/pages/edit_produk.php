<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow  mb-3 bg-white rounded">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card-header bg-primary text-white">
                    <h5> Edit Produk </h5>
                </div>
                <div class="card-body">
                    <form action="/pages/edit" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="form-control" placeholder="" required value="<?= $produk['id'] ?>">
                        <input type="hidden" name="gambar_lama" class="form-control" placeholder="" required value="<?= $produk['gambar'] ?>">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="" required value="<?= $produk['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi Produk"><?= $produk['deskripsi'] ?></textarea required value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Harga</label>
                            <input style="width: 400px;" type="number" name="harga" class="form-control" placeholder="Rp"required value="<?= $produk['harga'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Stok</label>
                            <input style="width: 400px;" type="number" name="stok" class="form-control" placeholder="Rp"required value="<?= $produk['stok'] ?>">
                        </div>
                        <div class="">
                            <label for="title">Gambar</label>
                        <br>
                        <img width="100" src="<?= base_url('uploads/produk/' . $produk['gambar']); ?>">
                            <input style="width: 400px;" type="file" name="gambar" class="form-control mt-1" >
                        </div>
                        <div class="form-group mt-1">
                        <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status"  style="width: 400px;">
                                <?php if ($produk['status'] == 1) : ?>
                                <option selected value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                                <?php else : ?>
                                <option value="1">Aktif</option>
                                <option selected value="0">Tidak Aktif</option>
                                <?php endif; ?>
                                
                                </select>
                            
                        </div>

                        <div class="form-group">
                        </div>
                        <button type="submit" name="submit"  class="btn btn-primary btn-block">Save</button>
                        <!-- <br> -->
                        <a href="<?= base_url() ?>" type="submit" name="" value="draft" class="btn btn-light btn-block ">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>