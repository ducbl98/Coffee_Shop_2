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
       $bills = $this->billService->getBill();
       require_once "resources/views/bills/list.php";
    }

    public function detail($id)
    {
        $bills = $this->billService->getDetail($id);
        require_once "resources/views/bills/detail.php";
    }

}