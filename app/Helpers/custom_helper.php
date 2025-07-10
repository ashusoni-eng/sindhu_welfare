<?php

if (! function_exists('format_father_name')) {
    function format_father_name(?string $name): string
    {
        if (empty($name)) {
            return '--';
        }

        $prefixes = ['shri', 'shree', 'mr.', 'mr', 'श्री', 'Dr.', 'dr.'];
        $trimmed  = trim($name);
        foreach ($prefixes as $prefix) {
            if (stripos($trimmed, $prefix) === 0) {
                return esc($trimmed);
            }
        }

        return esc('Mr. ' . $trimmed);
    }
}

if (! function_exists('format_mother_name')) {
    function format_mother_name(?string $name): string
    {
        if (empty($name)) {
            return '--';
        }

        $prefixes = ['shrimati', 'shreemati', 'shreematee', 'shrimatee', 'mrs.', 'mr', 'श्री', 'Ms.', 'Ms', 'ms', 'ms.'];
        $trimmed  = trim($name);
        foreach ($prefixes as $prefix) {
            if (stripos($trimmed, $prefix) === 0) {
                return esc($trimmed);
            }
        }

        return esc('Mrs. ' . $trimmed);
    }
}
