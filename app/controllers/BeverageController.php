<?php


namespace App\Controllers;


use App\Services\BeverageService;

class BeverageController
{

    public $beverageService;
    public function __construct()
    {
        $this->beverageService=new BeverageService();
    }

    public function show()
    {
        $results=$this->beverageService->show();
        include_once "resources/views/users/list.php";

    }

}