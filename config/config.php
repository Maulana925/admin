<?php
function base_url($path = '') {
    $base='http://localhost/karyawan';
    return $base. '/' . ltrim($path,'/');
}

function base_path($path = ' ') : string {
    return $_SERVER['DOCUMENT_ROOT'] . '/karyawan/' . $path;
}

function cek_admin(): void{
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin'){
        header('Location: '. base_url(('login/login.php')));
        exit();
    }
}