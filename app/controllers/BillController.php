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

    public function listBillCustom($day)
    {
        $bills = $this->billService->listBillCustom($day);
        if ($_REQUEST['day'] == 1) {
            $title = "List Bill Today";
        } elseif ($_REQUEST['day'] == 7) {
            $title = "List Bill Week";
        } else {
            $title = "List Bill Month";
        }
        require_once "resources/views/bills/list_bill_custom.php";
    }

    public function payment($bill)
    {
        $this->billService->payment($bill);

    }
}