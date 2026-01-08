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
    <div class="page">
        <!-- Start::navbar -->
        <?= $this->include('partials/admin/navbar') ?>
        <!-- End::navbar -->

        <!-- Start::sidebar -->
        <?= $this->include('partials/admin/sidebar') ?>
        <!-- End::sidebar -->

        <!-- Start::breadcrumb -->
        <div class="d-flex flex-column justify-content-center page-header-breadcrumb">
            <h4 id="page-title" class="fw-medium mb-2"><?= $title ?? 'Pages' ?></h4>
            <nav id="breadcrumb-container">
                <?= $this->include('partials/admin/breadcrumb') ?>
            </nav>
        </div>
        <!-- End::breadcrumb -->

        <!-- Start::main-content -->
        <div class="main-content app-content z-1">
            <div id="page-content" class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
        <!-- End::main-content -->

        <!-- End::copyright -->
        <?= $this->include('partials/admin/copyright') ?>
        <!-- End::copyright -->
    </div>

    <div class="scrollToTop">
        <a href="javascript:void(0);" class="arrow">
            <i class="las la-angle-double-up fs-20 text-fixed-white"></i>
        </a>
    </div>

    <div id="responsive-overlay"></div>

    <!-- Modal Container -->
    <div id="modal-container">
        <?= $this->renderSection('modals') ?>
    </div>

    <!-- Main Theme Js -->
    <script src="<?= base_url('templates/admin/js/main.js') ?>"></script>

    <!-- Popper JS -->
    <script src="<?= base_url('templates/admin/libs/@popperjs/core/umd/popper.min.js') ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('templates/admin/libs/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Sweetalert JS -->
    <script src="<?= base_url('templates/admin/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

    <!-- Defaultmenu JS -->
    <script src="<?= base_url('templates/admin/js/defaultmenu.min.js') ?>"></script>

    <!-- General Styles -->
    <?= $this->include('partials/scripts') ?>

    <!-- Page Scripts -->
    <?= $this->renderSection('scripts') ?>
</body>

</html>