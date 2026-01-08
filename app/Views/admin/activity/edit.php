<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Edit Kegiatan') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/activities/update/' . $activity->id) ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-3">
            <div class="card custom-card">
                <div class="card-header">
                    <h4 class="card-title">Gambar <span class="text-danger">*</span></h4>
                </div>
                <div class="card-body">
                    <?php $placeholder = base_url('uploads/activities/' . old('picture', $activity->picture)) ?>
                    <img id="picture-preview" src="<?= $placeholder ?>" alt="Preview Picture" class="img-fluid rounded border">
                    <input type="file" name="picture" id="picture" accept="image/*" hidden>
                </div>
                <div class="card-footer">
                    <label for="picture" class="btn btn-primary d-block w-100">
                        <i class="bi bi-file-earmark-image"></i>
                        Pilih Gambar
                    </label>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
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
                        <label for="activity_date" class="form-label">Tanggal Kegiatan</label>
                        <input type="date" class="form-control" id="activity_date" name="activity_date" value="<?= old('activity_date', date('Y-m-d', strtotime($activity->activity_date))) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Kegiatan <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul kegiatan" value="<?= old('title', $activity->title) ?>">
                    </div>

                    <div>
                        <label for="description" class="form-label">Deskripsi (Opsional)</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukan deskripsi kegiatan"><?= old('description', $activity->description) ?></textarea>
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
    $('#picture').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#picture-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        } else {
            $('#picture-preview').attr('src', '{{ $placeholder }}');
        }
    });
</script>

<?= $this->endSection() ?>