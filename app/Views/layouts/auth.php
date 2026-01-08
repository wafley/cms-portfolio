<!DOCTYPE html>
<html lang="en" data-theme-mode="dark" data-menu-styles="dark" style="--primary-rgb: 0, 146, 184;" data-default-header-styles="dark">

<head>
    <!-- Head Content -->
    <?= $this->include('partials/head') ?>

    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url('templates/admin/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- Style Css -->
    <link href="<?= base_url('templates/admin/css/styles.min.css') ?>" rel="stylesheet" />

    <!-- Icons Css -->
    <link href="<?= base_url('templates/admin/css/icons.css') ?>" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?= base_url('templates/admin/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" />

    <!-- Page Styles -->
    <?= $this->renderSection('styles') ?>
</head>

<body>
    <!-- Start::main-content -->
    <div class="page page-h">
        <div id="page-content" class="container m-auto my-5">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <!-- End::main-content -->

    <!-- Modal Container -->
    <div id="modal-container">
        <?= $this->renderSection('modals') ?>
    </div>

    <!-- Main Theme Js -->
    <script src="<?= base_url('templates/admin/js/main.js') ?>"></script>

    <!-- JQuery JS -->
    <script src="<?= base_url('templates/admin/libs/jquery/dist/jquery.min.js') ?>"></script>

    <!-- Date & Time Picker JS -->
    <script src="<?= base_url('templates/admin/libs/moment/moment.js') ?>"></script>

    <!-- Popper JS -->
    <script src="<?= base_url('templates/admin/libs/@popperjs/core/umd/popper.min.js') ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('templates/admin/libs/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Sweetalert JS -->
    <script src="<?= base_url('templates/admin/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

    <!-- General Styles -->
    <?= $this->include('partials/scripts') ?>

    <!-- Page Scripts -->
    <?= $this->renderSection('scripts') ?>
</body>

</html>