<!-- Start::sidebar -->
<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="<?= base_url() ?>" class="header-logo">
            <i class="fas fa-code me-2"></i>
            <span class="fw-bold fs-6">
                Wafley
            </span>
        </a>
    </div>

    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="main-sidebar-loggedin">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic mb-2">
                            <img src="<?= base_url('uploads/profile/' . $profile->photo) ?>" alt="user-img" class="rounded-circle mCS_img_loaded">
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-0">
                                <?= $profile->full_name ?>
                            </h6>
                            <span class="fs-13">
                                <?= $profile->email ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>

            <ul class="main-menu">
                <?php
                function isActive($route)
                {
                    $current = uri_string();

                    if ($current == $route || strpos($current, $route . '/') === 0) {
                        return 'active';
                    }

                    return '';
                }
                ?>

                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url('admin/dashboard') ?>" class="side-menu__item <?= isActive('admin/dashboard') ?> spa-link">
                        <span class="side-menu__icon">
                            <i class='mdi mdi-view-grid-outline fs-4'></i>
                        </span>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url('admin/biodata') ?>" class="side-menu__item <?= isActive('admin/biodata') ?> spa-link">
                        <span class="side-menu__icon">
                            <i class='mdi mdi-account-box fs-4'></i>
                        </span>
                        <span class="side-menu__label">Biodata</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url('admin/educations') ?>" class="side-menu__item <?= isActive('admin/educations') ?> spa-link">
                        <span class="side-menu__icon">
                            <i class='mdi mdi-book-education-outline fs-4'></i>
                        </span>
                        <span class="side-menu__label">Pendidikan</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url('admin/activities') ?>" class="side-menu__item <?= isActive('admin/activities') ?> spa-link">
                        <span class="side-menu__icon">
                            <i class='mdi mdi-calendar-check fs-4'></i>
                        </span>
                        <span class="side-menu__label">Kegiatan</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url('admin/socials') ?>" class="side-menu__item <?= isActive('admin/socials') ?> spa-link">
                        <span class="side-menu__icon">
                            <i class='mdi mdi-earth fs-4'></i>
                        </span>
                        <span class="side-menu__label">Sosial Media</span>
                    </a>
                </li>
                <!-- End::slide -->
            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
    </div>
</aside>
<!-- End::sidebar -->