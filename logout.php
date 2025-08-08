<?php
session_start();
session_destroy();
header('Location: /sso-login.php');
exit;
?>