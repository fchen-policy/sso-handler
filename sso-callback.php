<?php
$config = require 'config.php';

if (!isset($_GET['code'])) {
    die('No authorization code received');
}

$code = $_GET['code'];

// Use fake data directly
$userInfo = [
    'sub' => '12345',
    'email' => 'abc@policyreporter.com',
    'given_name' => 'Test',
    'family_name' => 'User',
    'username' => 'devel_admin'
];

// Store user session and redirect
session_start();
$_SESSION['user'] = $userInfo;
$_SESSION['logged_in'] = true;

header('Location: /dashboard.php');
exit;
?>