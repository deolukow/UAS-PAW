<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends model
{
    protected $table = 'mobil';
    protected $allowedFields = ['nama', 'kapasitas', 'transmisi', 'harga', 'mesin', 'airbag', 'gambar', 'gambar2', 'gambar3'];

    public function getMobil($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}
