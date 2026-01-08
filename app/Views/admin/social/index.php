<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Sosial Media') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<style>
    #education-table {
        width: fit-content;
        min-width: 100%;
        white-space: nowrap;
    }

    #education-table th,
    #education-table td {
        white-space: nowrap;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="card custom-card">
            <div class="card-body">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif ?>
                <div class="row mb-3">
                    <div class="col d-flex align-items-center gap-3">
                        <a href="<?= base_url('admin/socials/create') ?>" class="btn btn-primary">
                            <i class="me-2 fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <table id="education-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Platform</th>
                                        <th>URL</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($socials as $social): ?>
                                        <tr>
                                            <td class="text-center">
                                                <i class="<?= $social->icon ?> fs-3"></i>
                                            </td>
                                            <td>
                                                <?= $social->platform ?>
                                            </td>
                                            <td>
                                                <?= $social->url ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-3">
                                                    <a href="<?= base_url('admin/socials/' . $social->id . '/edit') ?>" class="btn btn-outline-info">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                        Perbarui
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" data-ajax="delete" data-url="<?= base_url('admin/socials/delete/' . $social->id) ?>">
                                                        <i class="mdi mdi-trash-can"></i>
                                                        Hapus
                                                    </button>
                                                    <a href="<?= base_url($social->url) ?>" target="_blank" class="btn btn-secondary">
                                                        <i class="mdi mdi-open-in-new"></i>
                                                        Visit
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>