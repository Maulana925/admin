<?php
session_start();
session_destroy();
include '../config/config.php';
header(header: 'Location: '  . base_url(path:'Login/login.php'));
exit;
?>
