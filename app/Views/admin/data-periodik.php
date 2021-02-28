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
                            <!-- <button type="button" class="btn btn-primary tambahperiodik"><i class="fas fa-plus-circle"></i> Tambah Siswa</button> -->
                            <button type="button" class="btn btn-success btn-edit" onclick="editperiodik()"><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick="hapusperiodik()"><i class="fas fa-trash"></i> Hapus</button>
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

<div class="periodikModal" style="display: none;">

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
    function dataperiodik() {
        $.ajax({
            url: "<?= site_url('dataperiodik/getperiodiksiswa') ?>",
            dataType: "json",
            success: function(response) {
                $('.datasiswa').html(response.data);
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    function editperiodik() {
        var siswa = $('#dataperiodik tbody tr.selected');
        if (siswa.length > 0) {
            var nis = $('#dataperiodik tbody tr.selected input#nis').val();
            console.log(nis);
            $.ajax({
                type: "post",
                url: "<?= base_url('dataperiodik/editperiodik') ?>",
                data: {
                    nis: nis
                },
                dataType: "json",
                success: function(response) {

                    $('.periodikModal').html(response.data).show();
                    $('#editperiodikModal').modal('show');

                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: 'Silahkan pilih siswa terlebih dahulu!'
            });
        }
    }

    function hapusperiodik() {
        var siswa = $('#dataperiodik tbody tr.selected');
        if (siswa.length > 0) {
            var nis = $('#dataperiodik tbody tr.selected input#nis').val();
            var nama = $('#dataperiodik tbody tr.selected td:eq(0)').text();
            Swal.fire({
                title: `Anda ingin menghapus siswa bernama ${nama}?`,
                text: "Data yang anda hapus tidak akan dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: "<?= base_url('dataperiodik/hapusperiodik') ?>",
                        data: {
                            nis: nis
                        },
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Data telah dihapus.',
                                text: response.sukses,
                            });
                            dataperiodik();

                        },
                        error: function(xhr, ajaxOption, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    });
                }
            })
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: 'Silahkan pilih siswa yang ingin dihapus terlebih dahulu!'
            });
        }
    }

    $(document).ready(function() {
        //Jalankan fungsi ambil data siswa
        dataperiodik();

        //Fungsi tambah data
        $('.tambahsiswa').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('dataperiodik/tambahperiodik') ?>",
                dataType: "json",
                success: function(response) {
                    $('.periodikModal').html(response.data).show();

                    $('#tambahperiodikModal').modal('show');
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });



    });
</script>
<?= $this->endSection() ?>