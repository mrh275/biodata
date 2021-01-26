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

        <form action="<?= base_url('/dataupload/add') ?>" class="form-group berkas-upload" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-periodik">DATA PERIODIK</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_ijazah">Upload Scan Ijazah SMP/MTs</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_ijazah')) ? 'is-invalid' : '' ?>" name="file_ijazah" id="ijazah" onchange="previewIjazah()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_ijazah') ?>
                    </div>
                    <label class="custom-file-label label-ijazah" for="ijazah">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-ijazah">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_skhun">Upload Scan SKHUN SMP/MTs</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_skhun')) ? 'is-invalid' : '' ?>" name="file_skhun" id="skhun" onchange="previewSkhun()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_skhun') ?>
                    </div>
                    <label class="custom-file-label label-skhun" for="skhun">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-skhun">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_kk">Upload Scan Kartu Keluarga (KK)</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_kk')) ? 'is-invalid' : '' ?>" name="file_kk" id="kk" onchange="previewKk()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_kk') ?>
                    </div>
                    <label class="custom-file-label label-kk" for="kk">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kk">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_akte">Upload Scan Akta Kelahiran</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input" name="file_akte" id="akte" onchange="previewAkte()">
                    <label class="custom-file-label label-akte" for="akte">Choose file</label>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-akte">
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