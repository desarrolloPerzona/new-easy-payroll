<?php

/**
 * HELPER FUNCTIONS
 */


if (!function_exists('formatCartCurrency')) {
    function formatCartCurrency($price)
    {
        $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY);
        return numfmt_format_currency($fmt, $price / 100, 'USD');
    }
}

if (!function_exists('formatCurrency')) {
    function formatCurrency($price)
    {
        setlocale(LC_MONETARY, 'es_MX');
        return NumberFormatter::formatCurrency('%i', $price) . "\n";
    }
}

if (!function_exists('addPercentSign')) {
    function addPercentSign($price)
    {
        if ($price) {
            return $price . '%';
        }
        return $price;
    }
}
if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        setlocale(LC_ALL, "es_ES");

        return strftime('%d de %B %Y', strtotime($date));
    }
}


if (!function_exists('slugify')) {
    function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    if(!function_exists('replaceUnderScore')){
        // Function to separate text using spaces and replacing underscore
        function replaceUnderScore($text){
            return str_replace('_', ' ', ucfirst($text));
        }
    }
}

//    Function to delete not empty directories
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}

