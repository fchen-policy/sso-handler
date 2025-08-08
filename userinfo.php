<?php
// Return OpenID Connect compliant user info
$userInfo = [
    'sub' => '12345',
    'email' => 'abc@policyreporter.com',
    'email_verified' => true,
    'given_name' => 'Test',
    'family_name' => 'User',
    'name' => 'Test User',
    'preferred_username' => 'devel_admin'
];

header('Content-Type: application/json');
echo json_encode($userInfo);
?>