<div class="modal fade" id="editsiswaModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Siswa | <?= $datasiswa['nama'] ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open('biodata/updatesiswa', ['class' => 'formeditsiswa']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $datasiswa['nama'] ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="jk">Jenis Kelamin</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="jk" id="jk" class="form-control">
                            <?php foreach ($jenis_kelamin as $jk) : ?>
                                <option <?php if ($datasiswa['jenis_kelamin'] == $jk['inisial']) : ?> selected="selected" <?php endif; ?> value="<?= $jk['inisial'] ?>"><?= $jk['keterangan'] ?></option>
                            <?php endforeach; ?>
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
                            <?php foreach ($kelas as $class) : ?>
                                <option <?php if ($datasiswa['kelas'] == $class['kelas']) : ?> selected="selected" <?php endif; ?> value="<?= $class['kelas'] ?>"><?= $class['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nis">Nomor Induk Sekolah (NIS)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nis" name="nis" value="<?= $datasiswa['nis'] ?>" readonly>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nisn">NISN</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $datasiswa['nisn'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nik">NIK (Nomor Induk Kependudukan)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $datasiswa['nik'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="kk">Nomor KK (Kartu Keluarga)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control " id="kk" name="kk" value="<?= $datasiswa['no_kk'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="anak_ke_berapa">Anak keberapa</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="anak_ke_berapa" name="anak_ke_berapa" value="<?= $datasiswa['anak_ke_berapa'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tempatlahir">Tempat Lahir</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $datasiswa['tempat_lahir'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $datasiswa['tanggal_lahir'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="no_akte">Nomor Akte Kelahiran</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="no_akte" name="no_akte" value="<?= $datasiswa['no_akte'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="agama">Agama</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="agama" id="agama" class="form-control">
                            <?php foreach ($agama as $a) : ?>
                                <option <?php if ($datasiswa['agama'] == $a['nomor_kode']) : ?> selected="selected" <?php endif; ?> value="<?= $a['nomor_kode'] ?>"><?= $a['nama_agama'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="alamat">Alamat Jalan</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $datasiswa['alamat'] ?>">

                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="rt">RT</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control " id="rt" name="rt" value="<?= $datasiswa['rt'] ?>">

                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="rw">RW</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="rw" name="rw" value="<?= $datasiswa['rw'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="dusun">Nama Dusun</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $datasiswa['dusun'] ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="desa">Desa/Kelurahan</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="desa" name="desa" value="<?= $datasiswa['desa'] ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="kecamatan">Kecamatan</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $datasiswa['kecamatan'] ?>">
                    </div>
                    <div class="col-lg-1 d-flex align-items-center">
                        <label for="pos">Kode POS</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" id="pos" name="pos" value="<?= $datasiswa['pos'] ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tinggal">Tempat Tinggal</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="tinggal" id="tinggal" class="form-control">
                            <?php foreach ($tempat_tinggal as $tinggal) : ?>
                                <option <?php if ($datasiswa['tempat_tinggal'] == $tinggal['nomor_kode']) : ?> selected="selected" <?php endif; ?> value="<?= $tinggal['nomor_kode'] ?>"><?= $tinggal['tempat_tinggal'] ?></option>
                            <?php endforeach; ?>
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
                            <?php foreach ($transportasi as $t) : ?>
                                <option <?php if ($datasiswa['transportasi'] == $t['nomor_kode']) : ?> selected="selected" <?php endif; ?> value="<?= $t['nomor_kode'] ?>"><?= $t['transportasi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-end">
                <button type="submit" class="btn btn-primary btn-simpan">Update</button>
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
        $('.formeditsiswa').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btn-simpan').attr('disable', 'disabled');
                    $('.btn-simpan').html('<i class="fas fa-spin fa-spinner"></i> Update');
                },
                complete: function() {
                    $('.btn-simpan').removeAttr('disable');
                    $('.btn-simpan').html('Update');
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil diubah',
                        text: response.sukses
                    })
                    $('div#editsiswaModal').modal('hide');
                    datasiswa();

                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>