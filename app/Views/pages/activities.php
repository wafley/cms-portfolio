<?= $this->extend('layouts/public') ?>
<?php $this->setVar('title', 'Kegiatan Harian') ?>

<?= $this->section('content') ?>

<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan Harian</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                <?php foreach ($activities as $activity): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="<?= base_url('uploads/activities/' . $activity->picture) ?>" alt="<?= $activity->title ?>" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="<?= base_url('uploads/activities/' . $activity->picture) ?>" class="glightbox portfolio-lightbox">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <a href="<?= base_url('uploads/activities/' . $activity->picture) ?>" target="_blank" class="portfolio-details-link">
                                        <i class="bi bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4><?= $activity->title ?></h4>
                                <p><?= $activity->description ?></p>
                                <div class="portfolio-tags">
                                    <span><?= format_date($activity->activity_date) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection() ?>