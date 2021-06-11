<?php

namespace App\Services;

use App\Models\BeverageModel;

class BeverageService
{
    public $beverageModel;
    public function __construct()
    {
        $this->beverageModel=new BeverageModel();
    }

    public function show()
    {
        return $this->beverageModel->show();
    }


}