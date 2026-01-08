<?php foreach ($socials as $social): ?>
    <a href="<?= $social->url ?>">
        <i class="<?= $social->icon ?>"></i>
    </a>
<?php endforeach ?>