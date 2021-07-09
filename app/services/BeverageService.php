<?php

namespace App\Services;



use App\Models\Beverage;
use App\Models\BeverageModel;

class BeverageService implements BaseService
{
    public BeverageModel $beverageModel;


    public function getAllCategory(): array
    {
        return $this->beverageModel->getAllCategoryName();
    }


    public function __construct()
    {
        $this->beverageModel = new BeverageModel();
    }

    public function convertDataToObject(): array
    {
        $data = $this->beverageModel->getAllData();
        //var_dump($data);
        $beverages = [];
        foreach ($data as $item) {
            $beverage = new Beverage($item);
            $beverage->setId($item['id']);
            $beverage->setImage($item['image']);
            array_push($beverages, $beverage);

        }
        return $beverages;
    }

    public function validateForm(): array
    {
        $errors = [];
        $fields = ['name', 'price', 'cost', 'category', 'status'];
        if (!empty($this->validateImage())) {
            $errors['image'] = $this->validateImage();
        }
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Can\'t be empty';
            }
        }

        return $errors;
    }

    private function validateImage(): array
    {
        $errorUpload = [];
        $targetDir = "public/uploads/";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if ($_FILES['image']['name'] == null) {
            $errorUpload[] = "Image is not upload";
        } else {

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check == false) {
                $errorUpload[] = "File is not an image.";
            }

            // Check if file already exists
            if (file_exists($targetFile)) {
                $errorUpload[] = "Image is already existed ";
            }

            // Check file size
            if ($_FILES["image"]["size"] > 500000) {
                $errorUpload[] = "Image is too large";
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $errorUpload[] = "Only JPG, JPEG, PNG & GIF files are allowed.";
            }

        }
        return $errorUpload;
    }

    public function addData($data, $image)
    {
        $beverage = new Beverage($data);
        $beverage->setImage($image);
        $this->beverageModel->insertData($beverage);
    }

    public function getDataById($id): Beverage
    {
        $data = $this->beverageModel->getDataById($id);
        $beverage = new Beverage($data[0]);
        $beverage->setId($data[0]['id']);
        $beverage->setImage($data[0]['image']);
        if ($data[0]['status'] == 1) {
            $beverage->setStatus('Hot');
        } else {
            $beverage->setStatus("Cold");
        }
        $categoryName = $this->beverageModel->getCategoryName($beverage->category);
        $beverage->setCategory($categoryName[0]['name']);
        return $beverage;
    }

    public function updateData($id, $data, $image)
    {
        $beverage = new Beverage($data);
        $beverage->setImage($image);
        $this->beverageModel->updateData($id, $beverage);
    }

    public function deleteData($id)
    {
        $imageToDelete = $this->getDataById($id)->image;
        unlink("public/uploads/" . $imageToDelete);
        $this->beverageModel->deleteData($id);
    }

    public function validateFormEdit(): array
    {
        $errors = [];
        $fields = ['name', 'price', 'cost', 'category', 'status'];
        if ($_FILES['image']['name']!=null) {
            if (!empty($this->validateImageEdit())) {
                $errors['image'] = $this->validateImage();
            }
        }
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Can\'t be empty';
            }
        }

        return $errors;
    }

    private function validateImageEdit(): array
    {
        $errorUpload = [];
        $targetDir = "public/uploads/";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check == false) {
            $errorUpload[] = "File is not an image.";
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            $errorUpload[] = "Image is already existed ";
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            $errorUpload[] = "Image is too large";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $errorUpload[] = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }

        return $errorUpload;
    }

    public function searchData($keyword): array
    {
        $data=$this->beverageModel->findData($keyword);
        $beverages=[];

        foreach ($data as $item){
            $beverage= new Beverage($item);
            $beverage->setId($item['id']);
            $beverage->setImage($item['image']);
            array_push($beverages,$beverage);
        }
        return $beverages;
    }

}