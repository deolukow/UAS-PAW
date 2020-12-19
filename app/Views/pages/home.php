<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- banner/jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">

        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="300">
                <h1>Welcome to our website</h1>
                <h2><i>The Best rental car in Manado</i></h2>
                <a href="#rental" class="btn-get-started">Get Started</a>
            </div>
        </section>

    </div>
</div>




<!-- contaiiner -->
<div class="container">
    <div class="row">
        <div class="col text-center">
            <div class="section-title" id="rental">
                <span>Rental</span>
                <h2 data-aos="fade-down">Rental</h2>
            </div>
            <div data-aos="fade-down">
                Kami hadir untuk memudahkan sewa mobil Anda untuk keperluan liburan, pernikahan atau bridal atau bisnis. Kami memiliki berbagai macam persediaan mobil yang bisa Anda sewa seperti Avanza, CRV, Inova dan masih banyak lagi. Kami membandingkan banyak penyedia sewa mobil terbaik untuk membantu Anda menemukan harga termurah dalam satu pencarian mudah. Dapatkan Harga Terbaik Kami, Pesan Sekarang!
            </div>

        </div>
    </div>
</div>

<!-- daftar oto -->
<div class="container">
    <div class="row mt" data-aos="zoom-in">
        <?php foreach ($mobil as $m) : ?>
            <div class="col-md">
                <div class="card border-warning mb-3">
                    <img class="card-img-top" src="../img/mobil/<?= $m['gambar']; ?>" alt="Card image cap" data-aos="zoom-in">
                    <div class="card-body">
                        <h5 class="card-title pesan"><?= $m['nama']; ?></h5>
                        <p class="card-text"><i>Start from </i><strong>IDR <?= $m['harga']; ?></strong>
                        </p>

                        <a href="/mobil/<?= $m["id"]; ?>" class="btn btn-warning" data-aos="fade-right">Rental/Rincian</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end daftar oto -->


<div class="container">
    <div class="row">
        <div class="col text-center" data-aos="fade-right">

            <br>Solusi terbaik saat ingin jalan-jalan atau liburan ke kota-kota besar di Indonesia adalah sewa mobil harian. Layanan yang tersedia berupa aplikasi rental mobil online. Anda dapat dengan mudah mengakses layanan langsung dari web browser anda. Disini, Anda bisa menemukan pilihan rental mobil yang murah dan berkualitas. Berdasarkan opsi yang tersedia, Anda bisa membandingkan jenis, kualitas, dan tarif sewa mobil tersebut, sehingga Anda bisa langsung memesan perjalanan yang paling sesuai untuk perjalanan Anda. Nikmati perjalanan yang nyaman dan menyenangkan!



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





<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <span>Team</span>
            <h2>Team</h2>
            <p>Kelompok IV Kelas B</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member">
                    <img src="../img/deo.jpg" alt="">
                    <h4>Excelsis Deo Lukow</h4>
                    <span>19021106024</span>

                    <div class="social">
                        <a href="https://www.facebook.com/deo.wazeng" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/deolukow_/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="###"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="150">
                <div class="member">
                    <img src="../img/eun.jpg" alt="">
                    <h4>Fieny Eunike Rorong </h4>
                    <span>19021106026</span>

                    <div class="social">
                        <a href="https://www.facebook.com/eunike.rorong.5" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/eunikerorong_/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="a"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                <div class="member">
                    <img src="../img/va.jpeg" alt="">
                    <h4>Vanesa Virginia Tilaar</h4>
                    <span>19021106033</span>

                    <div class="social">
                        <a href="https://www.facebook.com/vanesa.tilaar.18" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/vanessatilaar?r=nametag" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="w"><i class="fab fa-twitter"></i></a>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Team Section -->



<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

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