<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright text-center">
            Copyright &copy; <span id="year"></span>
            <a href="<?= base_url() ?>" class="fw-semibold">
                <?= config('Site')->appName ?>
            </a>
            All rights reserved
        </div>
        <div class="social-links d-flex justify-content-center">
            <?= $this->include('partials/public/social_links') ?>
        </div>
        <div class="credits">
            Designed by <a href="#">BootstrapMade</a>
        </div>
    </div>

</footer>