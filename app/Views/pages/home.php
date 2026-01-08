<?= $this->extend('layouts/public') ?>
<?php $this->setVar('title', 'Beranda') ?>

<?= $this->section('content') ?>

<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-content">
                    <h1 data-aos="fade-up" data-aos-delay="200">Halo, Saya <span class="highlight"><?= $profile->full_name ?></span></h1>
                    <h2 data-aos="fade-up" data-aos-delay="300">Creative <span class="typed" data-typed-items="<?= $profile->headline ?>"></span></h2>
                    <p data-aos="fade-up" data-aos-delay="400">
                        <?= esc($profile->about) ?>
                    </p>
                    <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
                        <a href="portfolio.html" class="btn btn-primary">Lihat Kegiatan Saya</a>
                    </div>
                    <div class="social-links" data-aos="fade-up" data-aos-delay="600">
                        <?= $this->include('partials/public/social_links') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-image" data-aos="zoom-in" data-aos-delay="300">
                    <div class="image-wrapper">
                        <img src="<?= base_url('uploads/profile/' . $profile->photo) ?>" alt="<?= $profile->full_name ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>