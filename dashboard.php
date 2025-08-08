<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: /sso-login.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($user['given_name'] ?? $user['email']) ?>!</h1>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <pre><?= htmlspecialchars(json_encode($user, JSON_PRETTY_PRINT)) ?></pre>
    <a href="/logout.php">Logout</a>
</body>
</html>