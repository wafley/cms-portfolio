<?php

if (!function_exists('breadcrumbLabel')) {
    function breadcrumbLabel(string $segment): string
    {
        return match ($segment) {
            'create' => 'Tambah',
            'edit'   => 'Ubah',
            'show'   => 'Detail',
            default  => ucwords(str_replace(['-', '_'], ' ', $segment)),
        };
    }
}

$uri = service('uri');
$segments = $uri->getSegments();

$breadcrumb = [];
$path = '';

?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/dashboard') ?>" class="spa-link">
            <?= config('Site')->appName ?>
        </a>
    </li>

    <?php foreach ($segments as $index => $segment): ?>
        <?php
        $path .= '/' . $segment;

        if ($segment === 'admin') {
            continue;
        }

        $isLast = $index === array_key_last($segments);
        ?>

        <?php if (!$isLast): ?>
            <li class="breadcrumb-item">
                <a href="<?= site_url($path) ?>" class="spa-link">
                    <?= esc(breadcrumbLabel($segment)) ?>
                </a>
            </li>
        <?php else: ?>
            <li class="breadcrumb-item active fw-normal" aria-current="page">
                <?= esc(breadcrumbLabel($segment)) ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ol>