<div class="modal fade" id="tambahsiswaModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Siswa Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open('biodata/simpansiswa', ['class' => 'formtambahsiswa']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nama" name="nama">
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
                        <div class="invalid-feedback errorJk">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="kelas">Kelas</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Pilih :</option>
                            <?php foreach ($kelas as $class) : ?>
                                <option value="<?= $class['kelas'] ?>"><?= $class['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback errorKelas">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nis">Nomor Induk Sekolah (NIS)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nis" name="nis">
                        <div class="invalid-feedback errorNis">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nisn">NISN</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nisn" name="nisn">
                        <div class="invalid-feedback errorNisn">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nik">NIK (Nomor Induk Kependudukan)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nik" name="nik">
                        <div class="invalid-feedback errorNik">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="kk">Nomor KK (Kartu Keluarga)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control " id="kk" name="kk">
                        <div class="invalid-feedback errorKk">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="anak_ke_berapa">Anak keberapa</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="anak_ke_berapa" name="anak_ke_berapa">
                        <div class="invalid-feedback errorAnak_ke_berapa">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tempatlahir">Tempat Lahir</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
                        <div class="invalid-feedback errorTempatLahir">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                        <div class="invalid-feedback errorTgl_lahir">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="no_akte">Nomor Akte Kelahiran</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="no_akte" name="no_akte">
                        <div class="invalid-feedback errorNo_akte">

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
                        <input type="text" class="form-control" id="alamat" name="alamat">
                        <div class="invalid-feedback errorAlamat">

                        </div>
                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="rt">RT</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control " id="rt" name="rt">
                        <div class="invalid-feedback errorRt">

                        </div>
                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="rw">RW</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="rw" name="rw">
                        <div class="invalid-feedback errorRw">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="dusun">Nama Dusun</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="dusun" name="dusun">
                        <div class="invalid-feedback errorDusun">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="desa">Desa/Kelurahan</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="desa" name="desa">
                        <div class="invalid-feedback errorDesa">

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="kecamatan">Kecamatan</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                        <div class="invalid-feedback errorKecamatan">

                        </div>
                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="pos">Kode POS</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" id="pos" name="pos">
                        <div class="invalid-feedback errorPos">

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

            </div>
            <div class="modal-footer justify-content-end">
                <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <?= form_close(); ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function() {

        //Simpan data siswa
        $('.formtambahsiswa').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btn-simpan').attr('disable', 'disabled');
                    $('.btn-simpan').html('<i class="fas fa-spin fa-spinner"></i> Simpan');
                },
                complete: function() {
                    $('.btn-simpan').removeAttr('disable', 'disabled');
                    $('.btn-simpan').html('Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama) {
                            $("#nama").addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('#nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }

                        if (response.error.jk) {
                            $("#jk").addClass('is-invalid');
                            $('.errorJk').html(response.error.jk);
                        } else {
                            $('#jk').removeClass('is-invalid');
                            $('.errorJk').html('');
                        }

                        if (response.error.kelas) {
                            $("#kelas").addClass('is-invalid');
                            $('.errorKelas').html(response.error.kelas);
                        } else {
                            $('#kelas').removeClass('is-invalid');
                            $('.errorKelas').html('');
                        }

                        if (response.error.nis) {
                            $("input#nis").addClass('is-invalid');
                            $('div.errorNis').html(response.error.nis);
                        } else {
                            $('input#nis').removeClass('is-invalid');
                            $('div.errorNis').html('');
                        }

                        if (response.error.nisn) {
                            $("#nisn").addClass('is-invalid');
                            $('.errorNisn').html(response.error.nisn);
                        } else {
                            $('#nisn').removeClass('is-invalid');
                            $('.errorNisn').html('');
                        }

                        if (response.error.nik) {
                            $("#nik").addClass('is-invalid');
                            $('.errorNik').html(response.error.nik);
                        } else {
                            $('#nik').removeClass('is-invalid');
                            $('.errorNik').html('');
                        }

                        if (response.error.kk) {
                            $("#kk").addClass('is-invalid');
                            $('.errorKk').html(response.error.kk);
                        } else {
                            $('#kk').removeClass('is-invalid');
                            $('.errorKk').html('');
                        }

                        if (response.error.anak_ke_berapa) {
                            $("#anak_ke_berapa").addClass('is-invalid');
                            $('.errorAnak_ke_berapa').html(response.error.anak_ke_berapa);
                        } else {
                            $('#anak_ke_berapa').removeClass('is-invalid');
                            $('.errorAnak_ke_berapa').html('');
                        }

                        if (response.error.tempatlahir) {
                            $("#tempatlahir").addClass('is-invalid');
                            $('.errorTempatLahir').html(response.error.tempatlahir);
                        } else {
                            $('#tempatlahir').removeClass('is-invalid');
                            $('.errorTempatLahir').html('');
                        }

                        if (response.error.tgl_lahir) {
                            $("#tgl_lahir").addClass('is-invalid');
                            $('.errorTgl_lahir').html(response.error.tgl_lahir);
                        } else {
                            $('#tgl_lahir').removeClass('is-invalid');
                            $('.errorTgl_lahir').html('');
                        }

                        if (response.error.no_akte) {
                            $("#no_akte").addClass('is-invalid');
                            $('.errorNo_akte').html(response.error.no_akte);
                        } else {
                            $('#no_akte').removeClass('is-invalid');
                            $('.errorNo_akte').html('');
                        }

                        if (response.error.agama) {
                            $("#agama").addClass('is-invalid');
                            $('.errorAgama').html(response.error.agama);
                        } else {
                            $('#agama').removeClass('is-invalid');
                            $('.errorAgama').html('');
                        }

                        if (response.error.alamat) {
                            $("#alamat").addClass('is-invalid');
                            $('.errorAlamat').html(response.error.alamat);
                        } else {
                            $('#alamat').removeClass('is-invalid');
                            $('.errorAlamat').html('');
                        }

                        if (response.error.rt) {
                            $("#rt").addClass('is-invalid');
                            $('.errorRt').html(response.error.rt);
                        } else {
                            $('#rt').removeClass('is-invalid');
                            $('.errorRt').html('');
                        }

                        if (response.error.rw) {
                            $("#rw").addClass('is-invalid');
                            $('.errorRw').html(response.error.rw);
                        } else {
                            $('#rw').removeClass('is-invalid');
                            $('.errorRw').html('');
                        }

                        if (response.error.dusun) {
                            $("#dusun").addClass('is-invalid');
                            $('.errorDusun').html(response.error.dusun);
                        } else {
                            $('#dusun').removeClass('is-invalid');
                            $('.errorDusun').html('');
                        }

                        if (response.error.desa) {
                            $("#desa").addClass('is-invalid');
                            $('.errorDesa').html(response.error.desa);
                        } else {
                            $('#desa').removeClass('is-invalid');
                            $('.errorDesa').html('');
                        }

                        if (response.error.kecamatan) {
                            $("#kecamatan").addClass('is-invalid');
                            $('.errorKecamatan').html(response.error.kecamatan);
                        } else {
                            $('#kecamatan').removeClass('is-invalid');
                            $('.errorKecamatan').html('');
                        }

                        if (response.error.pos) {
                            $("#pos").addClass('is-invalid');
                            $('.errorPos').html(response.error.pos);
                        } else {
                            $('#pos').removeClass('is-invalid');
                            $('.errorPos').html('');
                        }

                        if (response.error.tinggal) {
                            $("#tinggal").addClass('is-invalid');
                            $('.errorTinggal').html(response.error.tinggal);
                        } else {
                            $('#tinggal').removeClass('is-invalid');
                            $('.errorTinggal').html('');
                        }

                        if (response.error.transportasi) {
                            $("#transportasi").addClass('is-invalid');
                            $('.errorTransportasi').html(response.error.transportasi);
                        } else {
                            $('#transportasi').removeClass('is-invalid');
                            $('.errorTransportasi').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.sukses
                        });

                        $('div#tambahsiswaModal').modal('hide');
                        datasiswa();
                    }
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>