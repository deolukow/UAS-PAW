<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\MobilModel;

class Pages extends BaseController
{

    protected $mobilModel;
    protected $customerModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
        $this->customerModel = new CustomerModel();
    }



    public function index()
    {
        // $mobil = $this->mobilModel->findAll();

        $data = [
            'title' => 'Home | Rental Mobil',
            'mobil' => $this->mobilModel->getMobil(),

        ];

        return view('pages/home', $data);
    }
    public function about()
    {

        $data = [
            'title' => 'About us | Rental Mobil'
        ];

        return view('pages/about', $data);
    }

    public function mobil($id)
    {
        // $mobil = $this->mobilModel->findAll();

        $data = [
            'title' => 'Mobil | Rental Mobil',
            'mobil' => $this->mobilModel->getMobil($id),
            'customer' => $this->customerModel->getCustomer2($id)
        ];
        return view('pages/mobil', $data);
    }



    public function save2()
    {
        $harga = $this->request->getVar('i_harga');
        $durasi = $this->request->getVar('i_durasi');
        $tharga = 0;
        if ($durasi == "12 jam") {
            $tharga = $harga * 1;
        } else if ($durasi == "16 jam") {
            $tharga = $harga * 1.25;
        } else if ($durasi == "1 hari") {
            $tharga = $harga * 1.40;
        } else {
            $tharga = 0;
        }

        $this->customerModel->save([
            'nama_customer' => $this->request->getVar('i_nama'),
            'email' => $this->request->getVar('i_email'),
            'durasi' => $this->request->getVar('i_durasi'),
            'mobil' => $this->request->getVar('i_mobil'),
            't_harga' => $tharga,
            'id_mobil' => $this->request->getVar('i_id')
        ]);
        return redirect()->to('/');
    }







    //--------------------------------------------------------------------

}
