<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Dashboard') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-4">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="text-center py-3 rounded-3 bg-primary-transparent">
                            <i class="fas fa-graduation-cap fs-1"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">Total Pendidikan</h6>
                        <h3 class="fw-bold text-primary">
                            <?= $totalEducations ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="text-center py-3 rounded-3 bg-success-transparent">
                            <i class="fas fa-calendar fs-1"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">Total Kegiatan</h6>
                        <h3 class="fw-bold text-success">
                            <?= $totalActivities ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="text-center py-3 rounded-3 bg-warning-transparent">
                            <i class="fas fa-globe fs-1"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">Total Sosial Media</h6>
                        <h3 class="fw-bold text-warning">
                            <?= $totalSocials ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card custom-card">
            <div class="card-body">
                <h3 class="fw-bold">Selamat Datang di Panel Admin</h3>
                <p>
                    Anda dapat mengelola konten website portofolio Anda dari sini. Gunakan menu sidebar untuk menavigasi ke bagian manajemen Biodata, Pendidikan, atau Aktivitas.
                </p>
                <a href="<?= base_url() ?>" target="_blank" class="btn btn-outline-primary">
                    <i class="fas fa-external-link-alt me-2"></i>
                    Lihat Website
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>