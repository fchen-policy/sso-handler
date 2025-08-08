<?php
// Create a simple JWT-like token (not properly signed, just for testing)
$header = base64_encode(json_encode(['typ' => 'JWT', 'alg' => 'none']));
$payload = base64_encode(json_encode([
    'sub' => '12345',
    'email' => 'test@example.com',
    'given_name' => 'Test',
    'family_name' => 'User',
    'name' => 'Test User',
    'iss' => 'http://localhost:8000',
    'aud' => $_POST['client_id'] ?? 'test-client',
    'exp' => time() + 3600,
    'iat' => time()
]));
$idToken = $header . '.' . $payload . '.';

$tokenResponse = [
    'access_token' => bin2hex(random_bytes(32)),
    'token_type' => 'Bearer',
    'expires_in' => 3600,
    'id_token' => $idToken,
    'scope' => 'openid email profile'
];

header('Content-Type: application/json');
echo json_encode($tokenResponse);
?>