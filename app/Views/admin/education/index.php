<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Riwayat Pendidikan') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<style>
    #educations-table {
        width: min-content;
        min-width: 100%;
        white-space: nowrap;
    }

    #educations-table th,
    #educations-table td {
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
                        <a href="<?= base_url('admin/educations/create') ?>" class="btn btn-primary">
                            <i class="me-2 fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="educations-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Institusi</th>
                                        <th>Gelar</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($educations as $education): ?>
                                        <tr>
                                            <td>
                                                <?= $education->institution ?>
                                            </td>
                                            <td>
                                                <?= $education->degree ?>
                                            </td>
                                            <td>
                                                <?= $education->start_year ?> -
                                                <?= $education->end_year ?>
                                            </td>
                                            <td>
                                                <?= $education->description ?? '-' ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-3">
                                                    <a href="<?= base_url('admin/educations/' . $education->id . '/edit') ?>" class="btn btn-outline-info">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                        Perbarui
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" data-ajax="delete" data-url="<?= base_url('admin/educations/delete/' . $education->id) ?>">
                                                        <i class="mdi mdi-trash-can"></i>
                                                        Hapus
                                                    </button>
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