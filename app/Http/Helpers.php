<?php
use Illuminate\Support\Facades\Request;

if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        echo Request::is($path) ? ' class="active"' : '';
    }
}

if (!function_exists('getNumForHumans')) {
    function getNumForHumans($numbers)
    {
        if (!$numbers) {
            return $numbers;
        }
        $readable = ['',  'K', 'M', 'B'];
        $index = 0;
        while ($numbers > 1000) {
            $numbers /= 1000;
            ++$index;
        }

        return ''.round($numbers, 2).' '.$readable[$index];
    }
}
