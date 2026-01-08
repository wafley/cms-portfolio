<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Dokumentasi Icon') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <?php foreach ($icons as $icon): ?>
        <div class="col-lg-6">
            <div class="card custom-card">
                <div class="card-header">
                    <h4 class="card-title"><?= esc($icon['name']) ?></h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        <?= esc($icon['instruction']) ?>
                        <a href="<?= esc($icon['documentation_url']) ?>"
                            target="_blank">
                            Dokumentasi
                        </a>
                    </p>

                    <h6>Cara Penggunaan:</h6>
                    <div class="bg-light border rounded p-3 mb-3">
                        <code><?= esc($icon['example_usage']) ?></code>
                    </div>

                    <h6>Preview:</h6>
                    <ul class="icons-list list-unstyled mb-3">
                        <?php foreach ($icon['preview'] as $p): ?>
                            <li class="icons-list-item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?= $p ?>">
                                <i class="<?= esc($p) ?>"></i>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="<?= esc($icon['documentation_url']) ?>" target="_blank" class="btn btn-outline-primary w-100">
                        <i class="fas fa-book"></i> Lihat Dokumentasi
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>