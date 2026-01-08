<?php

if (!function_exists('format_price')) {
    function format_price($price): string
    {
        if ($price == 0) {
            return 'Rp 0 (Gratis)';
        }

        return 'Rp ' . number_format($price, 0, ',', '.');
    }
}

if (!function_exists('format_date')) {
    function format_date($date, $withTime = true)
    {
        if (!$date) {
            return null;
        }

        $indoMonth = [
            1 => 'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Agu',
            'Sep',
            'Okt',
            'Nov',
            'Des'
        ];

        $timestamp = strtotime($date);
        $day   = date('d', $timestamp);
        $month = $indoMonth[(int)date('m', $timestamp)];
        $year  = date('Y', $timestamp);
        $time  = date('H:i', $timestamp);

        return $withTime
            ? "{$day} {$month} {$year} {$time}"
            : "{$day} {$month} {$year}";
    }
}
