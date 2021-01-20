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
                    <input type="text" class="form-control" name="asal_sekolah">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="nopes_un">Nomor Peserta UN SMP/MTs</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="nopes_un">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_ijazah">Nomor Seri Ijazah</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="no_ijazah">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="no_skhun">Nomor Seri SKHUN</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="no_skhun">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="tinggi_badan">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="berat_badan">Berat Badan (kg)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="berat_badan">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="hobi">Hobi</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="hobi">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="cita_cita">Cita - cita</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="cita_cita">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="jarak_rumah">Jarak Tempat Tinggal ke sekolah (km)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="jarak_rumah">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 d-flex align-items-center">
                    <label for="waktu_tempuh">Waktu tempuh ke sekolah (jam/menit)</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="waktu_tempuh">
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