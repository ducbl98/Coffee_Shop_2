<?php

use App\Controllers\AuthController;
use App\Controllers\BillController;
use App\Controllers\BeverageController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
switch ($page) {
    case 'beverages':
        $beverageController = new BeverageController();
        switch ($action) {
            case "delete":
                $beverageController->deleteBeverage();
                break;
            case "add":
                $beverageController->addBeverage();
                break;
            case "detail":
                $beverageController->detailBeverage();
                break;
            case "edit":
                $beverageController->editBeverage();
                break;
            default:
                $beverageController->listBeverage();
                break;
        }
        break;
    case 'bill':
        $billController = new BillController();
        switch ($action) {
            case 'detail':
                $id = $_REQUEST['id'];
                $billController->detail($id);
                break;
            default:
                $billController->getBill();
                break;
        }
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
//    default:
//        $homeController = new HomeController();
//        $homeController->showDashboard();

}
