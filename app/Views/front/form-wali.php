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

        <form action="<?= base_url('/datawali/add') ?>" class="form-group" method="post">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-ayah">DATA WALI</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nama_wali">Nama Lengkap Wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_wali')) ? 'is-invalid' : '' ?>" name="nama_wali" value="<?= old('nama_wali') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_wali') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nik_wali">NIK Wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nik_wali')) ? 'is-invalid' : '' ?>" name="nik_wali" value="<?= old('nik_wali') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik_wali') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tahun_lahir_wali">Tahun Lahir Wali</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tahun_lahir_wali')) ? 'is-invalid' : '' ?>" name="tahun_lahir_wali" value="<?= old('tahun_lahir_wali') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tahun_lahir_wali') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pendidikan_wali">Pendidikan Terakhir Wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="pendidikan_wali" id="pendidikan_wali" class="form-control <?= ($validation->hasError('pendidikan_wali')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $p) : ?>
                            <option value="<?= $p['nomor_kode'] ?>"><?= $p['pendidikan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pendidikan_wali') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pekerjaan_wali">Pekerjaan Wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control <?= ($validation->hasError('pekerjaan_wali')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['nomor_kode'] ?>"><?= $job['pekerjaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pekerjaan_wali') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="penghasilan_wali">Penghasilan Bulanan Wali</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan_wali" id="penghasilan_wali" class="form-control <?= ($validation->hasError('penghasilan_wali')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['nomor_kode'] ?>"><?= $income['penghasilan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('penghasilan_wali') ?>
                    </div>
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