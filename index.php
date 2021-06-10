<?php
use App\Middles\AuthCheck;
session_start();
require_once "vendor/autoload.php";
$auth = new AuthCheck();
$auth->isLogin();
?>
<?php require_once "router.php"?>
<a href="index.php?page=logout">Log out</a>
