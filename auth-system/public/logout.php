<?php
include __DIR__ . '/../config/database.php';
include __DIR__ . '/../src/Auth.php';

$auth = new Auth($pdo);
$auth->logout();
header('Location: index.php');
exit();
