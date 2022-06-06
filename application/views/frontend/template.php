<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Architecture & Interior HTML Template">
    <meta name="author" content="DynamicLayers">

    <title><?= $title ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo/<?= $favicon ?>">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elegant-line-icons.css">
    <!-- Elegant Icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elegant-font-icons.css">
    <!-- Flat Icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slicknav.min.css">
    <!--Slick Slider-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
    <!--Slider CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slider.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/venobox/venobox.css">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <style>
        .float-wa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float-wa {
            margin-top: 16px;

        }
    </style>
    <script src="<?= base_url() ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navmenu" data-offset="70">

    <?php $this->load->view('frontend/navbar'); ?>

    <?= $contents ?>

    <?php $this->load->view('frontend/footer'); ?>

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

    <!-- jQuery Lib -->
    <script src="<?= base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
    <!-- Tether JS -->
    <script src="<?= base_url() ?>assets/js/vendor/tether.min.js"></script>
    <!-- Slicknav JS -->
    <script src="<?= base_url() ?>assets/js/vendor/jquery.slicknav.min.js"></script>
    <!-- OWL-Carousel JS -->
    <script src="<?= base_url() ?>assets/js/vendor/owl.carousel.min.js"></script>
    <!-- Smooth Scroll JS -->
    <script src="<?= base_url() ?>assets/js/vendor/smooth-scroll.min.js"></script>
    <!-- Venobox JS -->
    <script src="<?= base_url() ?>assets/js/vendor/venobox.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="<?= base_url() ?>assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <!--Slick Slider-->
    <script src="<?= base_url() ?>assets/js/vendor/slick.min.js"></script>
    <!--Counterup JS-->
    <script src="<?= base_url() ?>assets/js/vendor/jquery.counterup.min.js"></script>
    <!--Waypoints JS-->
    <script src="<?= base_url() ?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
    <!--YTPlayer Js-->
    <script src="<?= base_url() ?>assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow JS -->
    <script src="<?= base_url() ?>assets/js/vendor/wow.min.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
    <!-- Main JS -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/js/contact.js"></script>

</body>

</html>