<table id="datasiswa" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA SISWA</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>KELAS</th>
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
                <td><?= $siswa['tempat_lahir'] ?></td>
                <td><?= $siswa['tanggal_lahir'] ?></td>
                <td><?= $siswa['kelas'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    //Datatable Datasiswa
    $(document).ready(function() {
        $("#datasiswa").DataTable();
    });
</script>