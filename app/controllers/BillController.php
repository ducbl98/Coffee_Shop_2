<?php


namespace App\Controllers;

use App\Services\BillService;

class BillController
{
    public BillService $billService;

    public function __construct()
    {
        $this->billService = new BillService();
    }

    public function getBill()
    {
//        echo "<pre>";
//        var_dump(123);
//        echo "</pre>";
//        exit;
       $bills = $this->billService->getBill();
       require_once "../../resources/views/bills/list.php";
    }

}