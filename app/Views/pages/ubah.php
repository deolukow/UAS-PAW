<?= $this->extend('layout/a_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8 mt-5" data-aos="fade-right">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner border border-warning">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../img/mobil/<?= $mobil['gambar']; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/mobil/<?= $mobil['gambar2']; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/mobil/<?= $mobil['gambar3']; ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

        <div class="col-lg-4 mt-5" data-aos="fade-left">

            <h2 class="pesan"><?= $mobil['nama']; ?></h2>

            <strong>
                <p><?= $mobil['nama']; ?>
            </strong> Spesifikasi:</p>
            Kapasitas: <strong><?= $mobil['kapasitas']; ?></strong>
            <br class="mt-2">Transmisi:<strong><?= $mobil['transmisi']; ?></strong>
            <br class="mt-2">Mesin:<strong><?= $mobil['mesin']; ?></strong>
            <br class="mt-2">Support Airgbag:<strong><?= $mobil['airbag']; ?></strong>



            <div class="pesan mt-5">
                UBAH DATA MOBIL
            </div>
            <form action="/con_admin/update/<?= $mobil['id']; ?>" method="post" enctype="multipart/form-data" data-aos="fade-up">
                <?= csrf_field(); ?>

                <input type="hidden" name="gambar1Lama" value="<?= $mobil['gambar']; ?>">
                <input type="hidden" name="gambar2Lama" value="<?= $mobil['gambar2']; ?>">
                <input type="hidden" name="gambar3Lama" value="<?= $mobil['gambar3']; ?>">

                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_namaMobil">Nama Mobil</label>
                        <input type="text" class="form-control" id="i_namaMobil" placeholder="Nama" name="i_namaMobil" value="<?= $mobil['nama']; ?>" required>
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_kapasitasMobil">Kapasitas Penumpang</label>
                        <input type="text" class="form-control" id="i_kapasitasMobil" placeholder="kapasitas" name="i_kapasitasMobil" value="<?= $mobil['kapasitas']; ?>" required>
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
                        <input type="text" class="form-control" id="i_mesinMobil" placeholder="mesin" name="i_mesinMobil" value="<?= $mobil['mesin']; ?>" required>
                    </div>
                    <div class="col mb-3">
                        <label for="i_airbagMobil">Airbag</label>
                        <select class="custom-select my-1 mr-sm-2" id="i_airbagMobil" name="i_airbagMobil" value="<?= $mobil['airbag']; ?>">
                            <option selected>Choose...</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>

                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col mb-3">
                        <label for="i_hargaMobil">Harga Mobil(3 angka)</label>
                        <input type="number" class="form-control" id="i_hargaMobil" placeholder="(Dalam 12 jam)" name="i_hargaMobil" value="<?= $mobil['harga']; ?>" required>
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
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Ubah Data</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




<?= $this->endSection(); ?>