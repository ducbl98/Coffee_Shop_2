<?php


use App\Controllers\BeverageController;
use App\Controllers\OrderController;

require_once "vendor/autoload.php";
$page= $_REQUEST['page'] ?? null;
$action= $_REQUEST['action'] ?? null;


switch ($page){
    case 'beverage':
        $beverageController=new BeverageController();
        switch ($action){
            case "show":
                $beverageController->show();
                break;
            case "add":

                break;
            case "update":

                break;
            case "delete":
                break;

            default:
                break;
        }
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
    default:
        break;
}

