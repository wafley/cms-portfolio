<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Edit Link') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Tambah Link') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/socials/update/' . $social->id) ?>" method="POST">
    <div class="row">
        <div class="col-12">
            <div class="card custom-card">
                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')) : ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>

                    <div class="mb-3">
                        <label for="platform" class="form-label">Platform <span class="text-danger">*</span></label>
                        <input type="text" name="platform" id="platform" class="form-control" placeholder="Masukkan nama platform" value="<?= old('platform', $social->platform) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL <span class="text-danger">*</span></label>
                        <input type="text" name="url" id="url" class="form-control" placeholder="Masukkan url sosial media" value="<?= old('url', $social->url) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon Class <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <a href="<?= base_url('admin/icons') ?>" class="input-group-text" data-bs-toggle="tooltip" title="Klik untuk melihat dokumentasi icon">
                                <i id="preview-icon" class="<?= old('icon', $social->icon) ?>"></i>
                            </a>
                            <input type="text" name="icon" id="icon" class="form-control" placeholder="Masukkan icon class sosial media" value="<?= old('icon', $social->icon) ?>">
                        </div>
                        <small class="text-muted">
                            Lihat daftar icon lengkap di
                            <a href="<?= base_url('admin/icons') ?>" target="_blank" data-bs-toggle="tooltip" title="Klik untuk melihat dokumentasi icon">
                                Dokumentasi Icon
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </small>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(document).ready(function() {
        $('#icon').on('keyup change', function() {
            let iconClass = $(this).val().trim();
            let $iconPreview = $('#preview-icon');

            $iconPreview.attr('class', '');

            if (iconClass === '') {
                $iconPreview.addClass('fas fa-question');
            } else {
                iconClass.split(' ').forEach(function(cls) {
                    $iconPreview.addClass(cls);
                });
            }
        });

        $('#icon').trigger('keyup');
    });
</script>

<?= $this->endSection() ?>

<?= $this->endSection() ?>