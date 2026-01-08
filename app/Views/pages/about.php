<?= $this->extend('layouts/public') ?>
<?php $this->setVar('title', 'Tentang Saya') ?>

<?= $this->section('content') ?>

<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Saya</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center justify-content-between gy-5 mb-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
                <div class="intro-content">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Halo nama saya <?= $profile->full_name ?></h3>
                        <p>
                            <?= $profile->about ?>
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Email</h4>
                                        <p><?= $profile->email ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Nomor Telepon</h4>
                                        <p><?= $profile->phone ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Alamat</h4>
                                        <p><?= $profile->address ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cta-group">
                        <a href="#portfolio" class="btn-ghost">
                            Lihat Kegiatan Saya <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <a href="#" class="link-underline">
                            Download Resume <i class="bi bi-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
                <figure class="profile-figure text-center text-lg-end">
                    <img src="<?= base_url('uploads/' . $profile->photo) ?>" alt="<?= $profile->full_name ?>" class="img-fluid profile-photo">
                </figure>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>