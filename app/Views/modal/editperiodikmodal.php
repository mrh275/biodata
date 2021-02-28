<div class="modal fade" id="editperiodikModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Periodik Siswa | <?= $datasiswa['nama'] ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open('dataperiodik/updateperiodik', ['class' => 'formeditperiodik']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nis">Nomor Induk Sekolah (NIS)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nis" name="nis" value="<?= $dataperiodik['nis'] ?>" readonly>

                    </div>
                </div>
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
                        <label for="kelas">Kelas</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="kelas" id="kelas" class="form-control" disabled>
                            <option value="">Pilih :</option>
                            <?php foreach ($kelas as $class) : ?>
                                <option <?php if ($datasiswa['kelas'] == $class['kelas']) : ?> selected="selected" <?php endif; ?> value="<?= $class['kelas'] ?>"><?= $class['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="asal_sekolah">Asal Sekolah SMP/MTs</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= $dataperiodik['asal_sekolah'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nomor_peserta_un">Nomor Peserta UN</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nomor_peserta_un" name="nomor_peserta_un" value="<?= $dataperiodik['nomor_peserta_un'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nomor_seri_ijazah">Nomor Seri Ijazah</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control " id="nomor_seri_ijazah" name="nomor_seri_ijazah" value="<?= $dataperiodik['nomor_seri_ijazah'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="nomor_seri_skhun">Nomor Seri SKHUN</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nomor_seri_skhun" name="nomor_seri_skhun" value="<?= $dataperiodik['nomor_seri_skhun'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $dataperiodik['tinggi_badan'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="berat_badan">Berat Badan (Kg)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= $dataperiodik['berat_badan'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="hobi">Hobi</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="hobi" name="hobi" value="<?= $dataperiodik['hobi'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="cita_cita">Cita - cita</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="cita_cita" name="cita_cita" value="<?= $dataperiodik['cita_cita'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="jarak_rumah">Jarak Rumah ke Sekolah (km)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="jarak_rumah" name="jarak_rumah" value="<?= $dataperiodik['jarak_rumah'] ?>">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 d-flex align-items-center">
                        <label for="waktu_tempuh">Waktu Tempuh ke Sekolah (menit)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control " id="waktu_tempuh" name="waktu_tempuh" value="<?= $dataperiodik['waktu_tempuh'] ?>">

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
        $('.formeditperiodik').submit(function(e) {
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
                        title: 'Data Periodik Berhasil diubah',
                        text: response.sukses
                    })
                    $('div#editperiodikModal').modal('hide');
                    dataperiodik();

                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>