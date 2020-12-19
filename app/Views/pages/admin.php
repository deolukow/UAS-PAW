<?= $this->extend('layout/a_template'); ?>

<?= $this->section('content'); ?>



<!-- daftar oto -->
<div class="container">
    <div class="row mt-4">
        <div class="col text-center">
            <div class="section-title">
                <p>.</p>
                <span>Admin</span>
                <h2>Admin</h2>
            </div>

        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('hapus')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('hapus'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <?php foreach ($mobil as $m) : ?>
            <div class="col-md" data-aos="zoom-in">
                <div class="card border-warning mb-3">
                    <img class="card-img-top" src="../img/mobil/<?= $m['gambar']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pesan"><?= $m['nama']; ?></h5>
                        <p class="card-text">Start from <strong>IDR <?= $m['harga']; ?></strong></p>
                        <a href="/ubah/<?= $m["id"]; ?>" class="btn btn-warning">Ubah Data</a>
                        <a href="con_admin/hapus/<?= $m['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end daftar oto -->



<div class="container">
    <div class="row">
        <!-- tambah data -->
        <div class="col-sm-4 mt-5 mb-5 border border-warning" data-aos="fade-right">

            <div class="pesan mt-4" id="tambah">
                TAMBAH DATA MOBIL
            </div>
            <form action="/con_admin/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_namaMobil">Nama Mobil</label>
                        <input type="text" class="form-control" id="i_namaMobil" placeholder="Nama" name="i_namaMobil" required>
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_kapasitasMobil">Kapasitas</label>
                        <input type="text" class="form-control" id="i_kapasitasMobil" placeholder="kapasitas" name="i_kapasitasMobil" required>
                    </div>
                    <div class="col mb-3">
                        <label for="i_transmisiMobil">Transmisi</label>
                        <select class="custom-select my-1 mr-sm-2" id="i_transmisiMobil" name="i_transmisiMobil">
                            <option selected>Choose...</option>
                            <option value="Manual">Manual</option>
                            <option value="Matic">Matic</option>

                        </select>
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_mesinMobil">Mesin</label>
                        <input type="text" class="form-control" id="i_mesinMobil" placeholder="mesin" name="i_mesinMobil" required>
                    </div>
                    <div class="col mb-3">
                        <label for="i_airbagMobil">Airbag</label>
                        <select class="custom-select my-1 mr-sm-2" id="i_airbagMobil" name="i_airbagMobil">
                            <option selected>Choose...</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>

                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col mb-3">
                        <label for="i_hargaMobil">Harga Mobil</label>
                        <input type="number" class="form-control" id="i_hargaMobil" placeholder="(Dalam 12 jam)" name="i_hargaMobil" required>
                    </div>
                </div>

                <div class="form-row mt-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">


                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar">Pilih Gambar 1</label>
                        </div>
                    </div>
                </div>
                <div class="form-row mt-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar2" name="gambar2">
                            <label class="custom-file-label" for="gambar2">Pilih Gambar 2</label>
                        </div>
                    </div>
                </div>
                <div class="form-row mt-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar3" name="gambar3">
                            <label class="custom-file-label" for="gambar3">Pilih Gambar 3</label>
                        </div>
                    </div>
                </div>



                <div class="form-row mt-2">
                    <div class="col mb-5">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Tambah Data</button>

                    </div>
                    <div class="col mb-5">

                        <button type="reset" class="btn btn-danger btn-lg btn-block">reset</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- tabel -->
        <div class="col-lg-8 mt-5 mb-5 border border-warning" data-aos="fade-left">
            <div class="card mb-4">
                <div class="card-header pesan">
                    <i class="fas fa-table mr-1"></i>
                    Daftar Customer
                </div>
                <div class="card-body border border-warning">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Mobil</th>
                                    <th>Alamat Email</th>
                                    <th>Durasi Rental</th>
                                    <th>Total Bayar</th>
                                    <th>Dibuat Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($customer as $c) : ?>
                                <tr>
                                    <td><?= $c['nama_customer']; ?></td>
                                    <td><?= $c['mobil']; ?></td>
                                    <td><?= $c['email']; ?></td>
                                    <td><?= $c['durasi']; ?></td>
                                    <td> <strong>IDR <?= $c['t_harga']; ?></strong></td>
                                    <td><?= $c['created_at']; ?></td>
                                    <td><a href="con_admin/hapusc/<?= $c['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash-alt"></i></a></td>

                                </tr>
                            <?php endforeach; ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>





<?= $this->endSection(); ?>