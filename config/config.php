<?php
function base_url($path = '') {
    $base='http://localhost/karyawan';
    return $base. '/' . ltrim($path,'/');
}

function base_path($path = ' ') : string {
    return $_SERVER['DOCUMENT_ROOT'] . '/karyawan/' . $path;
}