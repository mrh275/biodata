<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<section>
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

        <form action="<?= base_url('/biodata/add') ?>" class="form-group" method="post">
            <?= csrf_field(); ?>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h4 class="biodata-siswa">BIODATA SISWA</h4>
                </div>
            </div>
            <?php $session = \Config\Services::session(); ?>
            <div class="row">
                <div class="col-lg-11">
                    <?= ($session->getFlashdata('nis_ada') == TRUE) ? '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ' . $session->getFlashdata('nis_ada') . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>' : '' ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="jk">Jenis Kelamin</label>
                </div>
                <div class="col-lg-8">
                    <select name="jk" id="jk" class="form-control <?= ($validation->hasError('jk')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($jenis_kelamin as $jk) : ?>
                            <option value="<?= $jk['inisial'] ?>"><?= $jk['keterangan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('jk') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kelas">Kelas</label>
                </div>
                <div class="col-lg-8">
                    <select name="kelas" id="kelas" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($kelas as $class) : ?>
                            <option value="<?= $class['kelas'] ?>"><?= $class['keterangan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('kelas') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nis">Nomor Induk Sekolah (NIS)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : '' ?>" name="nis" value="<?= old('nis'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nis') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nisn">NISN</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : '' ?>" name="nisn" value="<?= old('nisn'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nisn') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nik">NIK (Nomor Induk Kependudukan)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" name="nik" value="<?= old('nik'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kk">Nomor KK (Kartu Keluarga)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('kk')) ? 'is-invalid' : '' ?>" name="kk" value="<?= old('kk'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('kk') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="anak_ke_berapa">Anak keberapa</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('anak_ke_berapa')) ? 'is-invalid' : '' ?>" name="anak_ke_berapa" value="<?= old('anak_ke_berapa'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('anak_ke_berapa') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tempatlahir">Tempat Lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid' : '' ?>" name="tempatlahir" value="<?= old('tempatlahir'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tempatlahir') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="date" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : '' ?>" name="tgl_lahir" value="<?= old('tgl_lahir') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tgl_lahir') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_akte">Nomor Akte Kelahiran</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('no_akte')) ? 'is-invalid' : '' ?>" name="no_akte" value="<?= old('no_akte'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_akte') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="agama">Agama</label>
                </div>
                <div class="col-lg-8">
                    <select name="agama" id="agama" class="form-control  <?= ($validation->hasError('agama')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($agama as $a) : ?>
                            <option value="<?= $a['nomor_kode'] ?>"><?= $a['nama_agama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('agama') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="alamat">Alamat Jalan</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" value="<?= old('alamat'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('alamat') ?>
                    </div>
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="rt">RT</label>
                </div>
                <div class="col-lg-1">
                    <input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : '' ?>" name="rt" value="<?= old('rt'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('rt') ?>
                    </div>
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="rw">RW</label>
                </div>
                <div class="col-lg-1">
                    <input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : '' ?>" name="rw" value="<?= old('rw'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('rw') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="dusun">Nama Dusun</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('dusun')) ? 'is-invalid' : '' ?>" name="dusun" value="<?= old('dusun'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('dusun') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="desa">Desa/Kelurahan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control <?= ($validation->hasError('desa')) ? 'is-invalid' : '' ?>" name="desa" value="<?= old('desa'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('desa') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kecamatan">Kecamatan</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : '' ?>" name="kecamatan" value="<?= old('kecamatan'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('kecamatan') ?>
                    </div>
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="pos">Kode POS</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control <?= ($validation->hasError('pos')) ? 'is-invalid' : '' ?>" name="pos" value="<?= old('pos'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('pos') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tinggal">Tempat Tinggal</label>
                </div>
                <div class="col-lg-8">
                    <select name="tinggal" id="tinggal" class="form-control <?= ($validation->hasError('tinggal')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($tempat_tinggal as $tinggal) : ?>
                            <option value="<?= $tinggal['nomor_kode'] ?>"><?= $tinggal['tempat_tinggal'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('tinggal') ?>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="transportasi">Mode Transportasi</label>
                </div>
                <div class="col-lg-8">
                    <select name="transportasi" id="transportasi" class="form-control <?= ($validation->hasError('transportasi')) ? 'is-invalid' : '' ?>">
                        <option value="">Pilih :</option>
                        <?php foreach ($transportasi as $t) : ?>
                            <option value="<?= $t['nomor_kode'] ?>"><?= $t['transportasi'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('transportasi') ?>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-11 d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>

        </form>
    </div>
</section>

<?= $this->endSection() ?>