<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head Content -->
    <?= $this->include('partials/head') ?>

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('templates/public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('templates/public/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('templates/public/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('templates/public/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('templates/public/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('templates/admin/css/icons.css') ?>" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="<?= base_url('templates/public/assets/css/main.css') ?>" rel="stylesheet">

    <!-- Page Styles -->
    <?= $this->renderSection('styles') ?>
</head>

<body class="starter-page-page">

    <?= $this->include('partials/public/navbar') ?>

    <main class="main">

        <?= $this->renderSection('content') ?>

    </main>

    <?= $this->include('partials/public/footer') ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('templates/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/typed.js/typed.umd.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('templates/public/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('templates/public/assets/js/main.js') ?>"></script>

    <!-- General Styles -->
    <?= $this->include('partials/scripts') ?>

    <!-- Page Scripts -->
    <?= $this->renderSection('scripts') ?>

</body>

</html>