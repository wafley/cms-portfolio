<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- <img src="assets/img/logo.webp" alt=""> -->
            <h1 class="sitename">Wafley</h1>
        </a>

        <nav id="navmenu" class="navmenu">
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

            <ul>
                <li>
                    <a href="<?= base_url() ?>" class="<?= isActive('') ?>">Beranda</a>
                </li>
                <li>
                    <a href="<?= base_url('about') ?>" class="<?= isActive('about') ?>">Tentang</a>
                </li>
                <li>
                    <a href="<?= base_url('education') ?>" class="<?= isActive('education') ?>">Pendidikan</a>
                </li>
                <li>
                    <a href="<?= base_url('activities') ?>" class="<?= isActive('activities') ?>">Kegiatan</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <?= $this->include('partials/public/social_links') ?>
        </div>

    </div>
</header>