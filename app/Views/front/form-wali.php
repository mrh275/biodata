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
                        <option value="1">Tidak sekolah</option>
                        <option value="2">Putus SD</option>
                        <option value="3">SD Sederajat</option>
                        <option value="4">SMP Sederajat</option>
                        <option value="5">SMA Sederajat</option>
                        <option value="6">Diploma 1 (D1)</option>
                        <option value="7">Diploma 2 (D2)</option>
                        <option value="8">Diploma 3 (D3)</option>
                        <option value="9">Sarjana (S1)/Diploma 4 (D4)</option>
                        <option value="10">Magister (S2)</option>
                        <option value="11">Doktor (S3)</option>
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
                        <option value="1">Tidak bekerja</option>
                        <option value="2">Nelayan</option>
                        <option value="3">Petani</option>
                        <option value="4">Peternak</option>
                        <option value="5">PNS/TNI/POLRI</option>
                        <option value="6">Karyawan Swasta</option>
                        <option value="7">Pedagang Kecil</option>
                        <option value="8">Pedagang Besar</option>
                        <option value="9">Wiraswasta</option>
                        <option value="10">Wirausaha</option>
                        <option value="11">Buruh</option>
                        <option value="12">Pensiunan</option>
                        <option value="13">Meninggal Dunia</option>
                        <option value="99">Lainnya</option>
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
                        <option value="1">Kurang dari 500.000</option>
                        <option value="2">500.000 s/d 999.999</option>
                        <option value="3">1 juta s/d 1.999.999</option>
                        <option value="4">2 juta s/d 4.999.999</option>
                        <option value="5">5 juta s/d 20 juta</option>
                        <option value="6">Lebih dari 20 juta</option>
                        <option value="7">Tidak Berpenghasilan</option>
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