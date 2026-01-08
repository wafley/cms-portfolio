<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Edit ' . $education->institution) ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/educations/update/' . $education->id) ?>" method="POST">
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
                        <label for="institution" class="form-label">Institusi <span class="text-danger">*</span></label>
                        <input type="text" name="institution" id="institution" class="form-control" value="<?= old('institution', $education->institution) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="degree" class="form-label">Gelar</label>
                        <input type="text" name="degree" id="degree" class="form-control" value="<?= old('degree', $education->degree) ?>">
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="start_year" class="form-label">Tanggal Mulai <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="start_year" name="start_year" value="<?= old('start_year', $education->start_year) ?>">
                        </div>

                        <div class="col-lg-6">
                            <label for="end_year" class="form-label">Tanggal Selesai <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="end_year" name="end_year" value="<?= old('end_year', $education->end_year) ?>">
                        </div>
                    </div>

                    <div>
                        <label for="description" class="form-label">Deskripsi (Opsional)</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukan deskripsi pendidikan"><?= old('description', $education->description) ?></textarea>
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