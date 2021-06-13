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
            $categories=$this->beverageService->getAllCategory();
            include_once 'resources/views/users/add.php';
        } else {
            $errors = $this->beverageService->validateForm();
            if (empty($errors)) {
                move_uploaded_file($_FILES["image"]["tmp_name"], "public/uploads/".$_FILES['image']['name']);
                $this->beverageService->addData($_POST, $_FILES['image']['name']);
                header('Location: index.php?page=beverages');
            } else {
                $categories=$this->beverageService->getAllCategory();
                include_once 'resources/views/users/add.php';
            }
        }
    }
    public function editBeverage()
    {
        $beverage = $this->beverageService->getDataById($_GET['id']);
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $categories=$this->beverageService->getAllCategory();
            include_once 'resources/views/users/edit.php';
        }else{
            $errors = $this->beverageService->validateFormEdit();
            $id=$_POST['id'];
            if (empty($errors)) {
                if ($_FILES['image']['name']!=null) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], "public/uploads/" . $_FILES['image']['name']);
                    $this->beverageService->updateData($id, $_POST, $_FILES['image']['name']);
                }else{
                    $this->beverageService->updateData($id,$_POST,$beverage->image);
                }
                header('Location: index.php?page=beverages');
            } else {
                $categories=$this->beverageService->getAllCategory();
                include_once 'resources/views/users/edit.php';
            }
        }
    }

    public function deleteBeverage()
    {
        $this->beverageService->deleteData($_GET['id']);
        header('Location: index.php?page=beverages');
    }
    public function show()
    {
        $results=$this->beverageService->convertDataToObject();
        include_once "resources/views/users/list.php";

    }
    public function detailBeverage()
    {
        $beverage=$this->beverageService->getDataById($_GET['id']);
        include_once 'resources/views/users/detail.php';
    }

    public function searchBeverage()
    {
        $beverages = $this->beverageService->searchData($_POST["search"]);
        include_once 'resources/views/users/list.php';
    }

}