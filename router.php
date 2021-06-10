<?php
use App\Controllers\AuthController;
$page = isset($_REQUEST['page']) ?? null;
switch ($page) {
    case 'logout':
        $authcontroller = new AuthController();
        $authcontroller->logout();
}