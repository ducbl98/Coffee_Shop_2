<?php


namespace App\Services;


use App\Models\BillModel;
use App\Bill;

class BillService
{
    protected BillModel $billModel;

    public function __construct()
    {
        $this->billModel = new BillModel();
    }

    public function getBill($page)
    {
        $data = $this->billModel->getView($page);
        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setId($item['id']);
            $bills[] = $bill;
        }
        return $bills;
    }

    public function getDetail($id)
    {
        $data = $this->billModel->getDetail($id);
        $total = $this->billModel->getTotal($id);
        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setTotal($total['@total']);
            $bill->setId($item['id']);
            $bills[] = $bill;
        }
        return $bills;
    }

    public function listBillCustom($day)
    {
        $data = $this->billModel->getBillCustom($day);
        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setId($item['id']);
            $bills[] = $bill;
        }
        return $bills;
    }

    public function payment($bill)
    {
        $this->billModel->payment($bill);
    }

    public function search($value)
    {
        $data = $this->billModel->search($value);

        $bills = [];
        foreach ($data as $item) {
            $bill = new Bill($item);
            $bill->setId($item['id']);
            $bills[] = $bill;
        }
        return $bills;
    }
}