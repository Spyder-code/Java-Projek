<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script>
        function play() {
            var audio = document.getElementById("audio");
            audio.play();
        }
    </script>
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/logo1.1.png">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/style.css">

</head>

<body>
    <div class="contact">
        <h5><a href="#"><i class="fas fa-envelope"></i> projekjava@gmail.com |</a> INDONESIA</h5>
    </div>
    <!-- navbar top akhir -->

    <!-- navbarbot -->
    <div class="animasi">
        <nav class="navbar fixed-bottom">
            <!-- image audio -->


            <img src="<?= base_url('assets/'); ?>img/maid-2.gif" onclick="play()">
            <audio id="audio" src="<?= base_url('assets/'); ?>33.wav"></audio>


            <!-- end image audio -->
            <a href="#"><i class="fas fa-arrow-alt-circle-up"></i></a>
        </nav>
    </div>
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar sticky-top">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/'); ?>img/Logo1.1.png" style="width: 30" height="30"> Java Projek</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#
navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('user'); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('belajar'); ?>">Belajar</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Projek</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('user/projek'); ?>">Java Basic</a>
                        <a class="nav-link disabled" href="#" tabindex="0" ariadisabled="true">Java With Database</a>
                        <a class="nav-link disabled" href="#" tabindex="0" ariadisabled="true">Java With Networking</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('user/request'); ?>">Request Projek</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('user/about'); ?>">About</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="">
                <input class="form-control mr-sm-2" type="text" placeholder="Cari Projek" name="keyword">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- awal jumbotron -->
    <div class="jumbotron text-center">
        <div class="img1">
            <img src="<?= base_url('assets/'); ?>img\logo.png" class="rounded-circle">
            <h1 class="text-center">Java Projek</h1>
        </div>
    </div>
    <!-- akhir jumbotron -->