<?php
// FusionAuth Configuration
return [
    'client_id' => 'YOUR_ACTUAL_CLIENT_ID_HERE',
    'client_secret' => 'YOUR_ACTUAL_CLIENT_SECRET_HERE',
    'fusionauth_url' => 'http://localhost:9011',
    'redirect_uri' => 'http://localhost:8000/sso-callback.php',
    'scope' => 'openid email profile',
    'authorization_endpoint' => 'http://localhost:8000/authorize.php',
    'token_endpoint' => 'http://localhost:8000/token.php',
    'userinfo_endpoint' => 'http://localhost:8000/userinfo.php'
];