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

        <form action="<?= base_url('/dataayah/add') ?>" class="form-group" method="post">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-ayah">DATA AYAH KANDUNG</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nama_ayah">Nama Lengkap Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : '' ?>" name="nama_ayah" value="<?= old('nama_ayah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_ayah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nik_ayah">NIK Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nik_ayah')) ? 'is-invalid' : '' ?>" name="nik_ayah" value="<?= old('nik_ayah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik_ayah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tahun_lahir_ayah">Tahun Lahir Ayah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tahun_lahir_ayah')) ? 'is-invalid' : '' ?>" name="tahun_lahir_ayah" value="<?= old('tahun_lahir_ayah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tahun_lahir_ayah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pendidikan_ayah">Pendidikan Terakhir Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control <?= ($validation->hasError('pendidikan_ayah')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $p) : ?>
                            <option value="<?= $p['nomor_kode'] ?>"><?= $p['pendidikan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pendidikan_ayah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control <?= ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['nomor_kode'] ?>"><?= $job['pekerjaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pekerjaan_ayah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="penghasilan_ayah">Penghasilan Bulanan Ayah</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control <?= ($validation->hasError('penghasilan_ayah')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['nomor_kode'] ?>"><?= $income['penghasilan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('penghasilan_ayah') ?>
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