<?= $this->extend('template/admin') ?>
<?= $this->extend('template/sidemenu') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $submenuName['submenu_name'] ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $submenuName['submenu_name'] ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('/biodata/tambahsiswa') ?>" class="btn btn-primary tambahsiswa"><i class="fas fa-plus-circle"></i> Tambah Siswa</a>
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p class="card-text datasiswa">

                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>

<div class="tambahsiswaModal" style="display: none;">

</div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
    //Ambil data siswa
    function datasiswa() {
        $.ajax({
            url: "<?= site_url('biodata/getallsiswa') ?>",
            dataType: "json",
            success: function(response) {
                $('.datasiswa').html(response.data);
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    $(document).ready(function() {
        //Jalankan fungsi ambil data siswa
        datasiswa();

        //Fungsi tambah data
        $('.tambahsiswa').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('biodata/tambahsiswa') ?>",
                dataType: "json",
                success: function(response) {
                    $('.tambahsiswaModal').html(response.data).show();

                    $('#tambahsiswaModal').modal('show');
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });



    });
</script>
<?= $this->endSection() ?>