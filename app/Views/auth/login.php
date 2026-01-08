<?= $this->extend('layouts/auth') ?>
<?php $this->setVar('title', 'Masuk') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <form action="<?= base_url('login') ?>" method="POST">
            <?= csrf_field() ?>

            <div class="card custom-card">
                <div class="card-header">
                    <div class="d-flex flex-column align-items-center justify-content-center w-100">
                        <h2 class="fw-bold text-primary">Portal Admin!</h2>
                        <p class="text-center">Silakan login untuk mengelola konten</p>
                    </div>
                </div>

                <div class="card-body">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username anda" value="<?= old('username') ?>">
                    </div>

                    <div>
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi kamu" value="<?= old('password') ?>">
                            <button class="btn btn-light" type="button" onclick="togglePassword('password', this)">
                                <i class='fa fa-eye'></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary d-block w-100">
                        Masuk
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>