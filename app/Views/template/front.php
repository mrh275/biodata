<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('/asset/bootstrap') ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('/asset') ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('/asset') ?>/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/asset') ?>/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="shortcut icon" href="<?= base_url('/asset/img') ?>/favicon.ico" type="image/x-icon">

    <script src="<?= base_url('/asset') ?>/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('/asset') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('/asset/bootstrap') ?>/js/bootstrap.js"></script>
    <script src="<?= base_url('/asset') ?>/fontawesome/js/all.js"></script>
    <script src="<?= base_url('/asset') ?>/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <title><?= $title ?></title>
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


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
        // const fileUpload = new FileReader();


        //Ijazah preview
        function previewIjazah() {
            const ijazah = document.querySelector('#ijazah');
            const ijazahLabel = document.querySelector('.label-ijazah');
            const imgIjazah = document.querySelector('.img-ijazah');

            ijazahLabel.textContent = ijazah.files[0].name;
            const fileIjazah = new FileReader();
            fileIjazah.readAsDataURL(ijazah.files[0]);
            fileIjazah.onload = function(e) {
                imgIjazah.src = e.target.result;
            }
        }

        //SKHUN Preview
        function previewSkhun() {
            const skhun = document.querySelector('#skhun');
            const skhunLabel = document.querySelector('.label-skhun');
            const imgskhun = document.querySelector('.img-skhun');

            skhunLabel.textContent = skhun.files[0].name;
            const fileskhun = new FileReader();
            fileskhun.readAsDataURL(skhun.files[0]);
            fileskhun.onload = function(e) {
                imgskhun.src = e.target.result;
            }
        }

        //KK Preview
        function previewKk() {
            const kk = document.querySelector('#kk');
            const kkLabel = document.querySelector('.label-kk');
            const imgkk = document.querySelector('.img-kk');

            kkLabel.textContent = kk.files[0].name;
            const filekk = new FileReader();
            filekk.readAsDataURL(kk.files[0]);
            filekk.onload = function(e) {
                imgkk.src = e.target.result;
            }
        }

        //Akte Preview
        function previewAkte() {
            const akte = document.querySelector('#akte');
            const akteLabel = document.querySelector('.label-akte');
            const imgakte = document.querySelector('.img-akte');

            akteLabel.textContent = akte.files[0].name;
            const fileakte = new FileReader();
            fileakte.readAsDataURL(akte.files[0]);
            fileakte.onload = function(e) {
                imgakte.src = e.target.result;
            }
        }

        //KIP Preview
        function previewKip() {
            const kip = document.querySelector('#kip');
            const kipLabel = document.querySelector('.label-kip');
            const imgkip = document.querySelector('.img-kip');

            kipLabel.textContent = kip.files[0].name;
            const filekip = new FileReader();
            filekip.readAsDataURL(kip.files[0]);
            filekip.onload = function(e) {
                imgkip.src = e.target.result;
            }
        }

        //KIS Preview
        function previewKis() {
            const kis = document.querySelector('#kis');
            const kisLabel = document.querySelector('.label-kis');
            const imgkis = document.querySelector('.img-kis');

            kisLabel.textContent = kis.files[0].name;
            const filekis = new FileReader();
            filekis.readAsDataURL(kis.files[0]);
            filekis.onload = function(e) {
                imgkis.src = e.target.result;
            }
        }

        //PKH Preview
        function previewPkh() {
            const pkh = document.querySelector('#pkh');
            const pkhLabel = document.querySelector('.label-pkh');
            const imgpkh = document.querySelector('.img-pkh');

            pkhLabel.textContent = pkh.files[0].name;
            const filepkh = new FileReader();
            filepkh.readAsDataURL(pkh.files[0]);
            filepkh.onload = function(e) {
                imgpkh.src = e.target.result;
            }
        }
    </script>
</body>

</html>