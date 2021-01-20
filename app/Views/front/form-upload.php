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
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_ijazah')) ? 'is-invalid' : '' ?>" name="file_ijazah" id="customFile">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_ijazah') ?>
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="ijazah">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_skhun">Upload Scan SKHUN SMP/MTs</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_skhun')) ? 'is-invalid' : '' ?>" name="file_skhun" id="customFile">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_skhun') ?>
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="ijazah">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_kk">Upload Scan Kartu Keluarga (KK)</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('file_kk')) ? 'is-invalid' : '' ?>" name="file_kk" id="customFile">
                    <div class="invalid-feedback">
                        <?= $validation->getError('file_kk') ?>
                    </div>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="ijazah">
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-top">
                    <label for="file_akte">Upload Scan Akta Kelahiran</label>
                </div>
                <div class="col-lg-6 custom-file">
                    <input type="file" class="custom-file-input" name="file_akte" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="ijazah">
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