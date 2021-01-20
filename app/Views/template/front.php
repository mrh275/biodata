<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('/asset/bootstrap') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('/asset') ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('/asset') ?>/fontawesome/css/all.css" rel="stylesheet">

    <title>Portal Biodata Siswa SMAN 1 Rawamerta</title>
</head>

<body>

    <header>
        <div class="container-fluid bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 mt-3 mb-3">
                        <img src="<?= base_url('/asset/img') ?>/logo.png" alt="" class="logo">
                    </div>
                    <div class="col-lg-11 mt-4">
                        <h2 class="text-light brand">SMA NEGERI 1 RAWAMERTA</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <footer class="container-fluid bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3 mb-3">
                    Copyright <i class="far fa-copyright"></i> <?= date('Y') ?>. All Rights Reserved.
                </div>
                <div class="col-lg-6 mt-3 mb-3 foot">
                    Made with <i class="fas fa-heart"></i> by Muhamad Ramdani Hidayatullah.
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('/asset/bootstrap') ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('/asset') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('/asset') ?>/fontawesome/js/all.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>