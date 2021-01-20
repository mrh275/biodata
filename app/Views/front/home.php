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
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="jk">Jenis Kelamin</label>
                </div>
                <div class="col-lg-8">
                    <select name="jk" id="jk" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kelas">Kelas</label>
                </div>
                <div class="col-lg-8">
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="10 IPA 1">10 IPA 1</option>
                        <option value="10 IPA 2">10 IPA 2</option>
                        <option value="10 IPA 3">10 IPA 3</option>
                        <option value="10 IPS 1">10 IPS 1</option>
                        <option value="10 IPS 2">10 IPS 2</option>
                        <option value="11 IPA 1">11 IPA 1</option>
                        <option value="11 IPA 2">11 IPA 2</option>
                        <option value="11 IPS 1">11 IPS 1</option>
                        <option value="11 IPS 2">11 IPS 2</option>
                        <option value="12 IPA 1">12 IPA 1</option>
                        <option value="12 IPA 2">12 IPA 2</option>
                        <option value="12 IPS 1">12 IPS 1</option>
                        <option value="12 SMATER 1">12 SMATER 1</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nis">Nomor Induk Sekolah (NIS)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nis">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nisn">NISN</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nisn">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nik">NIK (Nomor Induk Kependudukan)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nik">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kk">Nomor KK (Kartu Keluarga)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="kk">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="anak_ke_berapa">Anak keberapa</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="anak_ke_berapa">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tempatlahir">Tempat Lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="tempatlahir">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                </div>
                <div class="col-lg-8">
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_akte">Nomor Akte Kelahiran</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="no_akte">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="agama">Agama</label>
                </div>
                <div class="col-lg-8">
                    <select name="agama" id="agama" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen/Protestan</option>
                        <option value="3">Katholik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Budha</option>
                        <option value="6">Khong Hu Chu</option>
                        <option value="99">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="alamat">Alamat Jalan</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="rt">RT</label>
                </div>
                <div class="col-lg-1">
                    <input type="text" class="form-control" name="rt">
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="rw">RW</label>
                </div>
                <div class="col-lg-1">
                    <input type="text" class="form-control" name="rw">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="dusun">Nama Dusun</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="dusun">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="desa">Desa/Kelurahan</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="desa">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="kecamatan">Kecamatan</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="kecamatan">
                </div>
                <div class="col-lg-1 d-flex align-items-center">
                    <label for="pos">Kode POS</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" name="pos">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tinggal">Tempat Tinggal</label>
                </div>
                <div class="col-lg-8">
                    <select name="tinggal" id="tinggal" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="1">Bersama Orang Tua</option>
                        <option value="2">Wali</option>
                        <option value="3">Kos</option>
                        <option value="4">Asrama</option>
                        <option value="5">Panti Asuhan</option>
                        <option value="6">Pesantren</option>
                        <option value="99">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="transportasi">Mode Transportasi</label>
                </div>
                <div class="col-lg-8">
                    <select name="transportasi" id="transportasi" class="form-control">
                        <option value="">Pilih :</option>
                        <option value="1">Jalan kaki</option>
                        <option value="2">Kendaraan Pribadi</option>
                        <option value="3">Kendaraan Umum/angkot/pete - pete</option>
                        <option value="4">Jemputan Sekolah</option>
                        <option value="5">Kereta Api</option>
                        <option value="6">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
                        <option value="99">Lainnya</option>
                    </select>
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