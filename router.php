<?php

use App\Controllers\AuthController;
use App\Controllers\BillController;

$page = isset($_REQUEST['page']) ?? null;
switch ($page) {


    case 'bill':
//        echo "<pre>";
//        var_dump(123);
//        echo "</pre>";
//        exit;
        $billController = new BillController();
        $billController->getBill();
        break;
    case 'logout':
        $authcontroller = new AuthController();
        $authcontroller->logout();
        break;
    default:

}
