<?= $this->extend('template/front'); ?>

<?= $this->section('content'); ?>

<section class="container-fluid">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <h3>
                    FORMULIR BIODATA SISWA <br>
                    SMA NEGERI 1 RAWAMERTA <br>
                    TAHUN PELAJARAN 2020/2021
                </h3>
            </div>
        </div>

        <form action="<?= base_url('/program_kesejahteraan/add') ?>" class="form-group berkas-upload" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-periodik">PROGRAM KESEJAHTERAAN</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="kip">Nomor Kartu Indonesia Pintar (KIP)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="kip" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_kip">Upload Scan Kartu Indonesia Pintar (KIP)</label>
                </div>
                <div class="col-lg-6 ml-3 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_kip')) ? 'is-invalid' : '' ?>" name="file_kip" id="kip" onchange="previewKip()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_kip') ?>
                    </div>
                    <label class="custom-file-label label-kip" for="kip">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kip">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="kis">Nomor Kartu Indonesia Sehat (KIS)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="kis" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_kis">Upload Scan Kartu Indonesia Sehat (KIS)</label>
                </div>
                <div class="col-lg-6 ml-3 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_kis')) ? 'is-invalid' : '' ?>" name="file_kis" id="kis" onchange="previewKis()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_kis') ?>
                    </div>
                    <label class="custom-file-label label-kis" for="kis">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kis">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="pkh">Nomor Kartu PKH/KKS/KPS/SKTM</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="pkh" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_pkh">Upload Scan Kartu PKH/KKS/KPS/SKTM</label>
                </div>
                <div class="col-lg-6 ml-3 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_pkh')) ? 'is-invalid' : '' ?>" name="file_pkh" id="pkh" onchange="previewPkh()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_pkh') ?>
                    </div>
                    <label class="custom-file-label label-pkh" for="pkh">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-pkh">
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-lg-11 d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>
</section>

<?= $this->endSection(); ?>