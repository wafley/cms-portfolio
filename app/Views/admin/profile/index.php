<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Biodata') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif ?>

        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?= base_url('uploads/profile/' . $profile->photo) ?>" alt="Preview Picture" class="img-fluid rounded border">
                    </div>
                    <div class="col-lg-9">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Nama</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->full_name ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Headline</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->headline ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Tentang</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->about ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Email</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->email ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Nomor Telepon</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->phone ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Alamat</span>
                                <span class="text-muted text-break font-monospace fs-12"><?= $profile->address ?></span>
                            </div>
                        </div>

                        <a href="<?= base_url('admin/biodata/' . $profile->id . '/edit') ?>" class="btn btn-outline-info w-100 mt-3">
                            <i class="mdi mdi-square-edit-outline"></i>
                            Perbarui
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>