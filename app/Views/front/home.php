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
                <dic class="col-lg-12">
                    <h4 class="biodata-siswa">BIODATA SISWA</h4>
                </dic>
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
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
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
                        <option value="10-ipa-1">10 IPA 1</option>
                        <option value="10-ipa-2">10 IPA 2</option>
                        <option value="10-ipa-3">10 IPA 3</option>
                        <option value="10-ips-1">10 IPS 1</option>
                        <option value="10-ips-2">10 IPS 2</option>
                        <option value="11-ipa-1">11 IPA 1</option>
                        <option value="11-ipa-2">11 IPA 2</option>
                        <option value="11-ips-1">11 IPS 1</option>
                        <option value="11-ips-2">11 IPS 2</option>
                        <option value="12-ipa-1">12 IPA 1</option>
                        <option value="12-ipa-2">12 IPA 2</option>
                        <option value="12-ips-1">12 IPS 1</option>
                        <option value="12-smater-1">12 SMATER 1</option>
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
                        <option value="1">Islam</option>
                        <option value="2">Kristen/Protestan</option>
                        <option value="3">Katholik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Budha</option>
                        <option value="6">Khong Hu Chu</option>
                        <option value="99">Lainnya</option>
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
                        <option value="1">Bersama Orang Tua</option>
                        <option value="2">Wali</option>
                        <option value="3">Kos</option>
                        <option value="4">Asrama</option>
                        <option value="5">Panti Asuhan</option>
                        <option value="6">Pesantren</option>
                        <option value="99">Lainnya</option>
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
                        <option value="1">Jalan kaki</option>
                        <option value="2">Kendaraan Pribadi</option>
                        <option value="3">Kendaraan Umum/angkot/pete - pete</option>
                        <option value="4">Jemputan Sekolah</option>
                        <option value="5">Kereta Api</option>
                        <option value="6">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
                        <option value="99">Lainnya</option>
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