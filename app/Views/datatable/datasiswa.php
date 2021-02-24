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
                <td><?= $nomor ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['nisn'] ?></td>
                <td><?= $siswa['nis'] ?></td>
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
        $("#datasiswa").DataTable({
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
    });
</script>