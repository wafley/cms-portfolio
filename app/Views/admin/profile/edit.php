<?= $this->extend('layouts/admin') ?>
<?php $this->setVar('title', 'Edit Biodata') ?>

<?= $this->section('breadcrumb') ?>
<?= $this->include('partials/admin/breadcrumb') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/biodata/update/' . $profile->id) ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-3">
            <div class="card custom-card">
                <div class="card-header">
                    <h4 class="card-title">Gambar <span class="text-danger">*</span></h4>
                </div>
                <div class="card-body">
                    <?php $placeholder = base_url('uploads/profile/' . old('photo', $profile->photo)) ?>
                    <img id="photo-preview" src="<?= $placeholder ?>" alt="Preview photo" class="img-fluid rounded border">
                    <input type="file" name="photo" id="photo" accept="image/*" hidden>
                </div>
                <div class="card-footer">
                    <label for="photo" class="btn btn-primary d-block w-100">
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
                        <label for="full_name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Masukkan nama lengkap anda" value="<?= old('full_name', $profile->full_name) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="headline" class="form-label">Headline <span class="text-danger">*</span></label>
                        <input type="text" name="headline" id="headline" class="form-control" placeholder="Masukkan headline anda" value="<?= old('headline', $profile->headline) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="about" class="form-label">Tentang <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="about" name="about" rows="4" placeholder="Masukan deskripsi diri anda"><?= old('about', $profile->about) ?></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= old('email', $profile->email) ?>">
                        </div>

                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= old('phone', $profile->phone) ?>">
                        </div>
                    </div>

                    <div>
                        <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Masukan deskripsi diri anda"><?= old('address', $profile->address) ?></textarea>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Perbarui Biodata</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $('#photo').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#photo-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        } else {
            $('#photo-preview').attr('src', '{{ $placeholder }}');
        }
    });
</script>

<?= $this->endSection() ?>