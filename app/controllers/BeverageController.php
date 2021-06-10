<?php


namespace App\Controllers;


use App\Services\BeverageService;

class BeverageController
{
    public BeverageService $beverageService;
    public function __construct()
    {
        $this->beverageService= new BeverageService();
    }

    public function listBeverage()
    {
        $beverages = $this->beverageService->convertDataToObject();
        include_once 'resources/views/users/list.php';
    }

    public function addBeverage()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            include_once 'resources/views/users/add.php';
        } else {
            $errors = $this->beverageService->validateForm();
            if (empty($errors)) {
                move_uploaded_file($_FILES["image"]["tmp_name"], "public/uploads/".$_FILES['image']['name']);
                $this->beverageService->addData($_POST, $_FILES['image']['name']);
                header('Location: index.php?page=beverages');
            } else {
                include_once 'resources/views/users/add.php';
            }
        }
    }
}