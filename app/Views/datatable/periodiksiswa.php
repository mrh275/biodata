<table id="dataperiodik" class="table table-bordered table-hover">
    <thead>
        <tr class="text-center">
            <th>NAMA SISWA</th>
            <th>NIS</th>
            <th>KELAS</th>
            <th>ASAL SEKOLAH</th>
            <th>NO PESERTA UN</th>
            <th>NO IJAZAH</th>
            <th>NO SKHUN</th>
            <th>HOBI</th>
            <th>CITA - CITA</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataperiodik as $siswa) :
        ?>
            <tr style="cursor:pointer;">
                <input type="hidden" name="nis" id="nis" value="<?= $siswa['nis'] ?>">
                <td><?= $siswa['nama'] ?></td>
                <td id="nis"><?= $siswa['nis'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
                <td><?= $siswa['asalsekolah'] ?></td>
                <td><?= $siswa['nopesun'] ?></td>
                <td><?= $siswa['noijazah'] ?></td>
                <td><?= $siswa['noskhun'] ?></td>
                <td><?= $siswa['hobi'] ?></td>
                <td><?= $siswa['cita'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    //Datatable Datasiswa
    $(document).ready(function() {
        var table = $("#dataperiodik").DataTable({
            "scrollX": true,
            "scrollY": true,
            "columnDefs": [{
                    width: 180,
                    targets: 0
                },
                {
                    width: 100,
                    targets: [3, 4, 5, 6, 7, 8]
                },

            ],
            "order": ['1', 'asc']
        });

        //Fungsi seleksi row table
        $('table#dataperiodik tbody').on('click', 'tr', function() {
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