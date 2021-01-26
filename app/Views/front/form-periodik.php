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

        <form action="<?= base_url('/dataperiodik/add') ?>" class="form-group" method="post">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <dic class="col-lg-12">
                    <h4 class="data-periodik">DATA PERIODIK</h4>
                </dic>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="asal_sekolah">Nama Sekolah Asal (SMP/MTs)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('asal_sekolah')) ? 'is-invalid' : '' ?>" name="asal_sekolah" value="<?= old('asal_sekolah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('asal_sekolah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nopes_un">Nomor Peserta UN SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nopes_un')) ? 'is-invalid' : '' ?>" name="nopes_un" value="<?= old('nopes_un') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nopes_un') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_ijazah">Nomor Seri Ijazah SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('no_ijazah')) ? 'is-invalid' : '' ?>" name="no_ijazah" value="<?= old('no_ijazah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_ijazah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_skhun">Nomor Seri SKHUN SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('no_skhun')) ? 'is-invalid' : '' ?>" name="no_skhun" value="<?= old('no_skhun') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_skhun') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tinggi_badan')) ? 'is-invalid' : '' ?>" name="tinggi_badan" value="<?= old('tinggi_badan') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tinggi_badan') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="berat_badan">Berat Badan (kg)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('berat_badan')) ? 'is-invalid' : '' ?>" name="berat_badan" value="<?= old('berat_badan') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('berat_badan') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="hobi">Hobi</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('hobi')) ? 'is-invalid' : '' ?>" name="hobi" value="<?= old('hobi') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('hobi') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="cita_cita">Cita - cita</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('cita_cita')) ? 'is-invalid' : '' ?>" name="cita_cita" value="<?= old('cita_cita') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('cita_cita') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="jarak_rumah">Jarak Tempat Tinggal ke sekolah (m)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('jarak_rumah')) ? 'is-invalid' : '' ?>" name="jarak_rumah" value="<?= old('jarak_rumah') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('jarak_rumah') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="waktu_tempuh">Waktu tempuh ke sekolah (menit)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('waktu_tempuh')) ? 'is-invalid' : '' ?>" name="waktu_tempuh" value="<?= old('waktu_tempuh') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('waktu_tempuh') ?>
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