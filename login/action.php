<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include '../config/config.php';
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $koneksidb->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // $_SESSION['username' ] = $user['username'];
        // $_SESSION['role'] = $user['role'];

        $_SESSION['user' ] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];

        if ($user['role'] == 'admin') {
            header("Location: ". base_url('dashboard/admin/'));
        } else if ($user['role'] == 'user') {
            header("Location: ".  base_url('dashboard/user/'));
        } else {
            echo "<script>alert('Role tidak dikenali!'); window.location.href = '../login/login.php';</script>"; 
        }
    }else{
        echo"<script>alert('Username atau Password Salah!'); Windows.location.href = '../login/login.php';<script>";
    }
}
?>