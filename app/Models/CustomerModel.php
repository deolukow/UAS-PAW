<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends model
{
    protected $table = 'customer';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_customer', 'email', 'durasi', 'mobil', 't_harga', 'id_mobil'];

    public function getCustomer($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }

    public function getCustomer2($id = false)
    {
        if ($id == false) {
            return $this->findAll()[0];
        }


        return $this->where(['id_mobil' => $id])->first();
    }
}
