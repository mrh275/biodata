<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">
                    PORTAL BIODATA SISWA <br>
                    SMAN 1 RAWAMERTA <br>
                    TAHUN PELAJARAN 2020/2021
                </h3>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <p class="text-center">
                    Sebelum mengisi formulir, mohon siapkan berkas dibawah ini :
                </p>
                <p class="text-justify">
                <ol>
                    <li>Ijazah SMP Asal</li>
                    <li>Kartu Keluarga</li>
                    <li>Akte Kelahiran (Bila ada)</li>
                </ol>
                </p>
                <p class="text-center">
                    Jika berkas sudah disiapkan, silahkan klik tombol dibawah ini! <br>
                    <i class="fas fa-arrow-down"></i>
                </p>
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?= base_url('/biodata') ?>" class="formulir">
                        <div class="card">
                            <div class="card-body">
                                <h4>FORMULIR BIODATA</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>