<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">



    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">



    <!-- my css -->
    <link rel="stylesheet" href="/css/style.css">


    <title><?= $title; ?></title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-car"></i></span></a>
            <a class="navbar-brand" href="/">Rental<span class="kuning">Mobil</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#team">About</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                    <a class="nav-item nav-link" href="/con_admin"><i class="fas fa-sign-in-alt"></i> </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->

    <?= $this->renderSection('content'); ?>





    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2020<strong><span class="kuning"> Kelompok IV</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Made with <i class="fas fa-heart"></i>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/venobox/venobox.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/vendor/aos/aos.js"></script>


    <!-- my js -->
    <script src="/js/script.js"></script>
</body>

</html>