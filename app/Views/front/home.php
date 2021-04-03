<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<section id="form-biodata">

</section>

<script>
    function formBiodata() {
        $.ajax({
            url: "<?= base_url('biodata/form'); ?>",
            dataType: "json",
            success: function(response) {
                $('section#form-biodata').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    }

    function formDataAyah() {
        $.ajax({
            url: "<?= base_url('dataayah/index'); ?>",
            dataType: "json",
            success: function(response) {
                Swal.fire({
                    title: 'Memuat formulir data ayah...',
                    timer: 1000,
                    onOpen: function() {
                        Swal.showLoading()
                    }
                });
                let form = $('section#form-biodata').html(response.data);
                // console.log(form.children().css('display', 'block'));
                form.children().animate({
                    left: 0
                }, 500)
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    };

    //Animation function
    function biodataHide() {
        let biodata = $('section#form-biodata div.biodata').animate({
            left: -1920,
        }, 1000);
        formDataAyah();
    }

    $(document).ready(function() {
        formBiodata();



    });
</script>

<?= $this->endSection() ?>