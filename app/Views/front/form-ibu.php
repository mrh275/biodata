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

        <form action="<?= base_url('/dataibu/add') ?>" class="form-group" method="post">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-ayah">DATA IBU KANDUNG</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nama_ibu">Nama Lengkap Ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : '' ?>" name="nama_ibu" value="<?= old('nama_ibu') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_ibu') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nik_ibu">NIK Ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nik_ibu')) ? 'is-invalid' : '' ?>" name="nik_ibu" value="<?= old('nik_ibu') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik_ibu') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tahun_lahir_ibu">Tahun Lahir Ibu</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tahun_lahir_ibu')) ? 'is-invalid' : '' ?>" name="tahun_lahir_ibu" value="<?= old('tahun_lahir_ibu') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tahun_lahir_ibu') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pendidikan_ibu">Pendidikan Terakhir Ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control <?= ($validation->hasError('pendidikan_ibu')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pendidikan as $p) : ?>
                            <option value="<?= $p['nomor_kode'] ?>"><?= $p['pendidikan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pendidikan_ibu') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control <?= ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($pekerjaan as $job) : ?>
                            <option value="<?= $job['nomor_kode'] ?>"><?= $job['pekerjaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('pekerjaan_ibu') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="penghasilan_ibu">Penghasilan Bulanan Ibu</label>
                </div>
                <div class="col-lg-8">
                    <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control <?= ($validation->hasError('penghasilan_ibu')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($penghasilan as $income) : ?>
                            <option value="<?= $income['nomor_kode'] ?>"><?= $income['penghasilan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('penghasilan_ibu') ?>
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