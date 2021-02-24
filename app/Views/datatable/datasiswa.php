<table id="datasiswa" class="table table-bordered table-hover">
    <thead>
        <tr class="text-center">
            <th>NO</th>
            <th>NAMA SISWA</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>NIK</th>
            <th>JENIS KELAMIN</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>KELAS</th>
            <th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 0;
        foreach ($datasiswa as $siswa) :
            $nomor++;
        ?>
            <tr style="cursor:pointer;">
                <input type="hidden" name="nis" id="nis" value="<?= $siswa['nis'] ?>">
                <td><?= $nomor ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['nisn'] ?></td>
                <td id="nis"><?= $siswa['nis'] ?></td>
                <td><?= $siswa['nik'] ?></td>
                <?php if ($siswa['jenis_kelamin'] == "L") : ?>
                    <td>Laki - laki</td>
                <?php else : ?>
                    <td>Perempuan</td>
                <?php endif; ?>
                <td><?= $siswa['tempat_lahir'] ?></td>
                <td><?= $siswa['tanggal_lahir'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
                <td><?= $siswa['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    //Datatable Datasiswa
    $(document).ready(function() {
        var table = $("#datasiswa").DataTable({
            "scrollX": true,
            "scrollY": true,
            "columnDefs": [{
                    width: 180,
                    targets: 1
                },
                {
                    width: 180,
                    targets: 9
                }
            ],
        });

        //Fungsi seleksi row table
        $('#datasiswa tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected')
            }
            // if ($(this).hasClass('selected')) {
            //     var nis = $('tr.selected input#nis').val();
            //     console.log(nis);
            //     // $('button.btn-edit').attr('id', nis);
            // }
        });


    });
</script>