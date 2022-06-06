<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <!-- Title -->
    <title><?= $title ?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/pace/pace.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/plugins/select2/css/select2.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery-3.5.1.min.js"></script>


    <!-- Theme Styles -->
    <link href="<?= base_url() ?>assets/admin/css/main.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/images/logo/<?= $favicon ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/logo/<?= $favicon ?>" />
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <?php $this->load->view("admin/sidebar"); ?>
        <div class="app-container">
            <?php $this->load->view("admin/navbar"); ?>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1><?= $title  ?></h1>
                                </div>
                            </div>
                        </div>
                        <?= $contents ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/pace/pace.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/highlight/highlight.pack.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/lightbox/fslightbox.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/main.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/pages/dashboard.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/pages/datatables.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/pages/lightbox.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/pages/settings.js"></script>

    <!-- Preview Image -->
    <script>
        function readImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(".image_load").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".preview_image").change(function() {
            readImage(this);
        });
    </script>
    <!-- end Preview Image -->



    <!-- AJax Add Type -->
    <script>
        $(document).ready(function() {
            $(".add-type").click(function() {
                var count = parseInt($('.count-type').val());
                var nextForm = count + 1;

                $('.form-type').append(
                    "<div class='card m-t-md'>" +
                    "<div class='card-body'>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Type Name') ?></label>" +
                    "<input type='text' class='form-control m-b-md' name='type_name[]' placeholder='<?= plang('Type Name') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Type Price') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_price[]' placeholder='<?= plang('Type Price') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label  class='form-label'><?= plang('Building Area') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='building_area[]' placeholder='<?= plang('Building Area') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label  class='form-label'><?= plang('Surface Area') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='surface_area[]' placeholder='<?= plang('Surface Area') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label  class='form-label'><?= plang('Number of Bedroom') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_number_of_bedroom[]' placeholder='<?= plang('Number of Bedroom') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Number of Bathroom') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_number_of_bathroom[]' placeholder='<?= plang('Number of Bathroom') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Number of Carport') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_number_of_carport[]' placeholder='<?= plang('Number of Carport') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>"
                );
                $("#count-type").val(nextform);
            });
        });
    </script>
    <!-- End Ajax Add Type -->

    <!-- jquery Add type In Property Add -->
    <script>
        $(document).ready(function() { // Ketika halaman sudah diload dan siap
            $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
                var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
                var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

                // Kita akan menambahkan form dengan menggunakan append
                // pada sebuah tag div yg kita beri id insert-form
                $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
                    "<div class='row m-t-md'>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Type Name') ?></label>" +
                    "<input type='text' class='form-control m-b-md' name='type_name[]' placeholder='<?= plang('Type Name') ?>' value='<?= set_value('type_name') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Building Area') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='building_area[]' placeholder='<?= plang('Building Area') ?>' value='<?= set_value('building_area') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col'>" +
                    "<label class='form-label'><?= plang('Type Price') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_price[]' placeholder='<?= plang('Type Price') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Surface Area') ?></label>" +
                    "<input type='text' class='form-control m-b-md' name='surface_area[]' placeholder='<?= plang('Surface Area') ?>' value='<?= set_value('surface_area') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Number of Bedroom') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_number_of_bedroom[]' placeholder='<?= plang('Number of Bedroom') ?>' value='<?= set_value('number_of_bedroom') ?>'>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Number of Bathroom') ?></label>" +
                    "<input type='text' class='form-control m-b-md' name='type_number_of_bathroom[]' placeholder='<?= plang('Number of Bathroom') ?>' value='<?= set_value('number_of_bathroom') ?>'>" +
                    "</div>" +
                    "<div class='col-md-6'>" +
                    "<label class='form-label'><?= plang('Number of Carport') ?></label>" +
                    "<input type='number' class='form-control m-b-md' name='type_number_of_carport[]' placeholder='<?= plang('Number of Carport') ?>' value='<?= set_value('number_of_carport') ?>'>" +
                    "</div>" +
                    "</div>"
                );

                $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform 
            });

            // Buat fungsi untuk mereset form ke semula
            $("#btn-reset-form").click(function() {
                $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
                $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
            });
        });
    </script>
    <!-- end jquery Add type -->

    <!-- Change Language -->
    <script>
        $(document).ready(function() {
            $(".en-language").click(function(e) {
                e.preventDefault();
                var id = $('.en-language').data('id');
                $.ajax({
                    url: "<?= base_url() ?>/admin/dashboard/change_language",
                    async: false,
                    type: 'POST',
                    data: "id=" + id,
                    dataType: 'html',
                    success: function() {
                        location.reload();
                    }
                });
            });

            $(".id-language").click(function(e) {
                e.preventDefault();
                var id = $('.id-language').data("id");
                var csrfHash = $('#csrf_data').val();
                $.ajax({
                    url: "<?= base_url() ?>/admin/dashboard/change_language",
                    async: false,
                    type: 'POST',
                    data: {
                        id: id,
                        csrf_test_name: csrfHash
                    },
                    dataType: 'html',
                    success: function() {
                        location.reload();
                    }
                });

            });

        });
    </script>
    <!-- End Change Language -->
</body>

</html>