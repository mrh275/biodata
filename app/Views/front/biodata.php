<div class="container biodata" style="position:relative; left:0;">
    <div class="row mt-3">
        <div class="col-lg-12 text-center">
            <h3>
                FORMULIR BIODATA<br>
                CALON PESERTA DIDIK (CPD)<br>
                PENERIMAAN PESERTA DIDIK BARU(PPDB)<br>
                TAHUN PELAJARAN 2020/2021
            </h3>
        </div>
    </div>

    <?= form_open('biodata/add', ['class' => 'form-group form-biodata']) ?>
    <?= csrf_field(); ?>
    <div class="row mt-4">
        <div class="col-lg-12">
            <h4 class="biodata-siswa">BIODATA SISWA</h4>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="no_regis">Nomor Pendaftaran</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="no_regis" id="no_regis">
            <div class="invalid-feedback errorNoRegis">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nama">Nama Lengkap</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="nama" id="nama">
            <div class="invalid-feedback errorNama">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="jk">Jenis Kelamin</label>
        </div>
        <div class="col-lg-8">
            <select name="jk" id="jk" class="form-control">
                <option value="">Pilih :</option>
                <?php foreach ($jenis_kelamin as $jk) : ?>
                    <option value="<?= $jk['inisial'] ?>"><?= $jk['keterangan'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback errorJK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nisn">NISN</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="nisn" id="nisn">
            <div class="invalid-feedback errorNISN">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nik">NIK (Nomor Induk Kependudukan)</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="nik" id="nik">
            <div class="invalid-feedback errorNIK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="kk">Nomor KK (Kartu Keluarga)</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="kk" id="kk">
            <div class="invalid-feedback errorKK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="anak_ke_berapa">Anak keberapa</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="anak_ke_berapa" id="anak_ke_berapa">
            <div class="invalid-feedback errorAnakKeBerapa">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tempatlahir">Tempat Lahir</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
            <div class="invalid-feedback errorTempatLahir">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
        <div class="col-lg-8">
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
            <div class="invalid-feedback errortgl_lahir">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="no_akte">Nomor Akte Kelahiran</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="no_akte" id="akte">
            <div class="invalid-feedback errorAkte">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="agama">Agama</label>
        </div>
        <div class="col-lg-8">
            <select name="agama" id="agama" class="form-control">
                <option value="">Pilih :</option>
                <?php foreach ($agama as $a) : ?>
                    <option value="<?= $a['nomor_kode'] ?>"><?= $a['nama_agama'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback errorAgama">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="alamat">Alamat Jalan</label>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="alamat" id="alamat">
            <div class="invalid-feedback errorAlamat">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="rt">RT</label>
        </div>
        <div class="col-lg-1">
            <input type="text" class="form-control" name="rt" id="rt">
            <div class="invalid-feedback errorRT">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="rw">RW</label>
        </div>
        <div class="col-lg-1">
            <input type="text" class="form-control" name="rw" id="rw">
            <div class="invalid-feedback errorRW">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="dusun">Nama Dusun</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="dusun" id="dusun">
            <div class="invalid-feedback errorDusun">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="desa">Desa/Kelurahan</label>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="desa" id="desa">
            <div class="invalid-feedback errorDesa">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="kecamatan">Kecamatan</label>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="kecamatan" id="kecamatan">
            <div class="invalid-feedback errorKecamatan">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="pos">Kode POS</label>
        </div>
        <div class="col-lg-3">
            <input type="text" class="form-control" name="pos" id="pos">
            <div class="invalid-feedback errorPOS">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tinggal">Tempat Tinggal</label>
        </div>
        <div class="col-lg-8">
            <select name="tinggal" id="tinggal" class="form-control">
                <option value="">Pilih :</option>
                <?php foreach ($tempat_tinggal as $tinggal) : ?>
                    <option value="<?= $tinggal['nomor_kode'] ?>"><?= $tinggal['tempat_tinggal'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback errorTinggal">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="transportasi">Mode Transportasi</label>
        </div>
        <div class="col-lg-8">
            <select name="transportasi" id="transportasi" class="form-control">
                <option value="">Pilih :</option>
                <?php foreach ($transportasi as $t) : ?>
                    <option value="<?= $t['nomor_kode'] ?>"><?= $t['transportasi'] ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback errorTransportasi">

            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-11 d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-primary simpan">Tambah</button>
        </div>
    </div>



    <?= form_close() ?>
</div>

<script>
    $(document).ready(function() {

        $('.form-biodata').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                // beforeSend: function() {
                //     Swal.fire({
                //         title: 'Sedang menyimpan data',
                //         timer: 1000,
                //         allowEscapeKey: false,
                //         allowOutsideClick: false,
                //         onOpen: function() {
                //             Swal.showLoading()
                //         }
                //     }).then(
                //         () => {},
                //         (dismiss) => {
                //             if (dismiss === 'timer') {
                //                 Swal({
                //                     icon: 'success',
                //                     title: 'Yeay!',
                //                     text: response.sukses
                //                 })
                //             }
                //         }
                //     )
                //     // $('button.simpan').html('<i class="fas fa-spim fa-spinner"></i>')
                // },
                // complete: function() {
                //     Swal.fire({
                //         icon: 'success',
                //         title: 'Yeay!',
                //         text: response.sukses
                //     });
                // },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama) {
                            $('input#nama').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('input#nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }

                        if (response.error.nisn) {
                            $('input#nisn').addClass('is-invalid');
                            $('.errorNISN').html(response.error.nisn);
                        } else {
                            $('input#nisn').removeClass('is-invalid');
                            $('.errorNISN').html('');
                        }

                        if (response.error.nik) {
                            $('input#nik').addClass('is-invalid');
                            $('.errorNIK').html(response.error.nik);
                        } else {
                            $('input#nik').removeClass('is-invalid');
                            $('.errorNIK').html('');
                        }

                        if (response.error.noKK) {
                            $('input#kk').addClass('is-invalid');
                            $('.errorKK').html(response.error.noKK);
                        } else {
                            $('input#kk').removeClass('is-invalid');
                            $('.errorKK').html('');
                        }

                        if (response.error.anakKeBerapa) {
                            $('input#anak_ke_berapa').addClass('is-invalid');
                            $('.errorAnakKeBerapa').html(response.error.anakKeBerapa);
                        } else {
                            $('input#anak_ke_berapa').removeClass('is-invalid');
                            $('.errorAnakKeBerapa').html('');
                        }

                        if (response.error.tempatlahir) {
                            $('input#tempatlahir').addClass('is-invalid');
                            $('.errorTempatLahir').html(response.error.tempatlahir);
                        } else {
                            $('input#tempatlahir').removeClass('is-invalid');
                            $('.errorTempatLahir').html('');
                        }

                        if (response.error.tgl_lahir) {
                            $('input#tgl_lahir').addClass('is-invalid');
                            $('.errortgl_lahir').html(response.error.tgl_lahir);
                        } else {
                            $('input#tgl_lahir').removeClass('is-invalid');
                            $('.errortgl_lahir').html('');
                        }

                        if (response.error.akte) {
                            $('input#akte').addClass('is-invalid');
                            $('.errorAkte').html(response.error.akte);
                        } else {
                            $('input#akte').removeClass('is-invalid');
                            $('.errorAkte').html('');
                        }

                        if (response.error.alamat) {
                            $('input#alamat').addClass('is-invalid');
                            $('.errorAlamat').html(response.error.alamat);
                        } else {
                            $('input#alamat').removeClass('is-invalid');
                            $('.errorAlamat').html('');
                        }

                        if (response.error.rt) {
                            $('input#rt').addClass('is-invalid');
                            $('.errorRT').html(response.error.rt);
                        } else {
                            $('input#rt').removeClass('is-invalid');
                            $('.errorRT').html('');
                        }

                        if (response.error.rw) {
                            $('input#rw').addClass('is-invalid');
                            $('.errorRW').html(response.error.rw);
                        } else {
                            $('input#rw').removeClass('is-invalid');
                            $('.errorRW').html('');
                        }

                        if (response.error.dusun) {
                            $('input#dusun').addClass('is-invalid');
                            $('.errorDusun').html(response.error.dusun);
                        } else {
                            $('input#dusun').removeClass('is-invalid');
                            $('.errorDusun').html('');
                        }

                        if (response.error.desa) {
                            $('input#desa').addClass('is-invalid');
                            $('.errorDesa').html(response.error.desa);
                        } else {
                            $('input#desa').removeClass('is-invalid');
                            $('.errorDesa').html('');
                        }

                        if (response.error.kecamatan) {
                            $('input#kecamatan').addClass('is-invalid');
                            $('.errorKecamatan').html(response.error.kecamatan);
                        } else {
                            $('input#kecamatan').removeClass('is-invalid');
                            $('.errorKecamatan').html('');
                        }

                        if (response.error.pos) {
                            $('input#pos').addClass('is-invalid');
                            $('.errorPOS').html(response.error.pos);
                        } else {
                            $('input#pos').removeClass('is-invalid');
                            $('.errorPOS').html();
                        }

                    } else {
                        Swal.fire({
                            title: 'Sedang menyimpan data',
                            timer: 1000,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            onOpen: function() {
                                Swal.showLoading()
                            }
                        }).then(
                            (dismiss) => {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yeay!',
                                    text: response.sukses,
                                    timer: 1000,
                                    showConfirmButton: false
                                }).then(
                                    (dismiss) => {
                                        biodataHide();
                                    }
                                )
                            }
                        );

                    }

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });

        });
    });
</script>