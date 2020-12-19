<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8 mt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner border border-warning" data-aos="fade-right">
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
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" data-aos="fade-up">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" data-aos="fade-up">
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
            <br class="mt-2 mb-2">Support Airgbag:<strong><?= $mobil['airbag']; ?></strong>




            <div class="alert alert-dark border border-warning mt-4" role="alert">
                <i>*Notice</i>
                <p><i>Untuk sekarang, pembayaran bisa dilakukan langsung bersama dengan pengambilan unit</i></p>
                <i>* Gambar unit di aplikasi hanya ilustrasi, untuk real picture bisa hubungi customer service kami.</i>
            </div>

            <p></p>
            <div class="pesan mt-5" data-aos="fade-up">
                DETAIL PEMESANAN
            </div>
            <form action="/pages/save2" method="post" data-aos="fade-up">
                <?= csrf_field(); ?>
                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_nama">Nama Pemesan</label>
                        <input type="text" class="form-control" id="i_nama" placeholder="Nama" name="i_nama" required>
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col mb-3">
                        <label for="i_email">Email Pemesan</label>
                        <input type="text" class="form-control" id="i_email" placeholder="Email" name="i_email" required>
                    </div>
                </div>
                <div class="form-row mt-2 garis">
                    <div class="col mb-3">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Durasi Pemesanan</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="i_durasi">
                            <option selected>Choose...</option>
                            <option onclick="hitung()">12 jam</option>
                            <option onclick="hitung()">16 jam</option>
                            <option onclick="hitung()">1 hari</option>
                        </select>
                    </div>
                </div>

                <div class="form-row ">
                    <div class="col" data-aos="fade-up">
                        <input type="number" class="form-control" id="i_harga" placeholder="First name" value="<?= $mobil['harga']; ?>" name="i_harga" hidden>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col ">
                        <input type="text" class="form-control" id="i_mobil" value="<?= $mobil['nama']; ?>" name="i_mobil" hidden>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col ">
                        <input type="text" class="form-control" id="i_mobil" value="<?= $mobil['id']; ?>" name="i_id" hidden>
                    </div>
                </div>



                <div class="form-row mt-2">
                    <div class="col harga">
                        Total Harga :
                    </div>
                    <div class="col idr" id="totalBayar">

                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col mb-5">
                        <?php if ($mobil['id'] == $customer['id_mobil']) : ?>
                            <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="sold()" id="rentall" disabled>Rental</button>
                            <div>
                                <i>*Mohon maaf untuk sementara Mobil ini belum tersedia/Mobil ini telah dirental</i>
                            </div>
                        <?php else : ?>
                            <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="sold()" id="rentall">Rental</button>
                        <?php endif; ?>
                    </div>
                    <div id="sold">
                        <br></br>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3><span class="kuning">HOPE YOU ENJOY OUR WEBSITE</span></h3>

            <a class="cta-btn" href="#contact">Contact Us</a>
        </div>

    </div>
</section><!-- End Cta Section -->



<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container bt-2">

        <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
            <p>Punya Pertanyaan? Hubungi kami melalui:</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Samratulangi, Manado.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="far fa-envelope"></i>
                    <h3>Email</h3>
                    <p>Rental@gmail.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Telepon</h3>
                    <p>+62 8539 723 3673</p>
                </div>
            </div>

        </div>


    </div>
</section><!-- End Contact Section -->


<?= $this->endSection(); ?>