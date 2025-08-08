<?php
$config = require 'config.php';

// Generate fake authorization code and redirect back
$code = bin2hex(random_bytes(16));
$redirectUri = $_GET['redirect_uri'] ?? $config['redirect_uri'];
$state = $_GET['state'] ?? '';

$callbackUrl = $redirectUri . '?' . http_build_query([
    'code' => $code,
    'state' => $state
]);

header('Location: ' . $callbackUrl);
exit;
?>