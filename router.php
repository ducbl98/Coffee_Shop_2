<?php


use App\Controllers\AuthController;
use App\Controllers\BillController;
use App\Controllers\BeverageController;
use App\Controllers\OrderController;


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
            case 'list-today':
                $day = $_REQUEST['day'];
                $billController->listBillCustom($day);
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
    case "order":
        $orderController=new OrderController();
        switch ($action){

            case "createOrder":
                $orderController->create();
                break;
            case "addDetail":
                break;
        }
        break;
//    default:
//        $homeController = new HomeController();
//        $homeController->showDashboard();

}
