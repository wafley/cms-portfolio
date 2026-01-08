<?= $this->extend('layouts/public') ?>
<?php $this->setVar('title', 'Pendidikan') ?>

<?= $this->section('content') ?>

<section id="resume" class="resume section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Latar Belakang Pendidikan</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-12">
                <div class="resume-item" data-aos="fade-up">
                    <h3 class="resume-title">Pendidikan</h3>
                    <div class="resume-content">
                        <?php foreach ($educations as $education): ?>
                            <article class="education-item">
                                <h4><?= $education->institution ?></h4>
                                <h5>
                                    <?= $education->start_year ?> -
                                    <?= $education->end_year ?>
                                </h5>
                                <p class="institution"><em><?= $education->degree ?? '-' ?></em></p>
                                <p>
                                    <?= $education->description ?>
                                </p>
                            </article>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>