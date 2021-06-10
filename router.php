<?php


use App\Controllers\BeverageController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
switch ($page) {
    case 'beverages':
        $beverageController = new BeverageController();
        switch ($action) {
            case "delete":
                break;
            case "add":
                $beverageController->addBeverage();
                break;
            default:
                $beverageController->listBeverage();
                break;

        }
        break;
//    case 'logout':
//        $authController = new AuthController();
//        $authController->logout();
//        break;
//    default:
//        $homeController = new HomeController();
//        $homeController->showDashboard();

}
