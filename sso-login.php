<?php
$config = require 'config.php';

$authUrl = $config['authorization_endpoint'] . '?' . http_build_query([
    'client_id' => $config['client_id'],
    'response_type' => 'code',
    'redirect_uri' => $config['redirect_uri'],
    'scope' => $config['scope']
]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>SSO Login</title>
</head>
<body>
    <h1>Login</h1>
    <a href="<?= htmlspecialchars($authUrl) ?>" style="display: inline-block; padding: 10px 20px; background: #007cba; color: white; text-decoration: none; border-radius: 4px;">
        Login with SSO
    </a>
</body>
</html>