<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\MobilModel;

class con_admin extends BaseController
{

    protected $mobilModel;
    protected $customerModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
        $this->customerModel = new CustomerModel();
    }



    public function admin()
    {
        $data = [
            'title' => 'Admin | Rental Mobil',
            'mobil' => $this->mobilModel->getMobil(),
            'customer' => $this->customerModel->getCustomer()
        ];
        return view('pages/admin', $data);
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Ubah | Rental ubah',
            'mobil' => $this->mobilModel->getMobil($id)
        ];
        return view('pages/ubah', $data);
    }


    public function save()
    {
        //ambil gambar
        $fileGambar1 = $this->request->getFile('gambar');
        $fileGambar2 = $this->request->getFile('gambar2');
        $fileGambar3 = $this->request->getFile('gambar3');

        //cek apakah tidak ada gambar yang di upload
        if ($fileGambar1->getError() == 4) {
            $namaGambar1 = 'default.png';
        } else {
            //generete nama sampul random
            $namaGambar1 = $fileGambar1->getRandomName();
            // pindahkan file ke folder img
            $fileGambar1->move('img/mobil', $namaGambar1);
        }

        //cek apakah tidak ada gambar yang di upload
        if ($fileGambar2->getError() == 4) {
            $namaGambar2 = 'default.png';
        } else {
            //generete nama sampul random
            $namaGambar2 = $fileGambar2->getRandomName();
            // pindahkan file ke folder img
            $fileGambar2->move('img/mobil', $namaGambar2);
        }

        //cek apakah tidak ada gambar yang di upload
        if ($fileGambar3->getError() == 4) {
            $namaGambar3 = 'default.png';
        } else {
            //generete nama sampul random
            $namaGambar3 = $fileGambar3->getRandomName();
            // pindahkan file ke folder img
            $fileGambar3->move('img/mobil', $namaGambar3);
        }


        $this->mobilModel->save([
            'nama' => $this->request->getVar('i_namaMobil'),
            'kapasitas' => $this->request->getVar('i_kapasitasMobil'),
            'transmisi' => $this->request->getVar('i_transmisiMobil'),
            'harga' => $this->request->getVar('i_hargaMobil'),
            'mesin' => $this->request->getVar('i_mesinMobil'),
            'airbag' => $this->request->getVar('i_airbagMobil'),
            'gambar' => $namaGambar1,
            'gambar2' => $namaGambar2,
            'gambar3' => $namaGambar3
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');

        return redirect()->to('/admin');
    }

    public function hapus($id)
    {
        //cari berdasarkan id
        $mobil = $this->mobilModel->find($id);

        if ($mobil['gambar'] != 'default.png') {
            //hapus gambar
            unlink('img/mobil/' . $mobil['gambar']);
        }
        if ($mobil['gambar2'] != 'default.png') {
            //hapus gambar
            unlink('img/mobil/' . $mobil['gambar2']);
        }
        if ($mobil['gambar3'] != 'default.png') {
            //hapus gambar
            unlink('img/mobil/' . $mobil['gambar3']);
        }


        //hapus di database
        $this->mobilModel->delete($id);
        return redirect()->to('/admin');
    }



    public function hapusc($id)
    {
        $this->customerModel->delete($id);
        session()->setFlashdata('hapus', 'Data Berhasil dihapus.');
        return redirect()->to('/admin');
    }



    public function update($id)
    {
        //ambil gambar
        $fileGambar1 = $this->request->getFile('gambar');
        $fileGambar2 = $this->request->getFile('gambar2');
        $fileGambar3 = $this->request->getFile('gambar3');

        if ($fileGambar1->getError() == 4) {
            $namaGambar1 = $this->request->getVar('gambar1Lama');
        } else {
            //generete nama sampul random
            $namaGambar1 = $fileGambar1->getRandomName();
            // pindahkan file ke folder img
            $fileGambar1->move('img/mobil', $namaGambar1);
            //hapus file lama
            unlink('img/mobil/' . $this->request->getVar('gambar1Lama'));
        }

        if ($fileGambar2->getError() == 4) {
            $namaGambar2 = $this->request->getVar('gambar2Lama');
        } else {
            //generete nama sampul random
            $namaGambar2 = $fileGambar2->getRandomName();
            // pindahkan file ke folder img
            $fileGambar2->move('img/mobil', $namaGambar2);
            //hapus file lama
            unlink('img/mobil/' . $this->request->getVar('gambar2Lama'));
        }

        if ($fileGambar3->getError() == 4) {
            $namaGambar3 = $this->request->getVar('gambar3Lama');
        } else {
            //generete nama sampul random
            $namaGambar3 = $fileGambar3->getRandomName();
            // pindahkan file ke folder img
            $fileGambar3->move('img/mobil', $namaGambar3);
            //hapus file lama
            unlink('img/mobil/' . $this->request->getVar('gambar3Lama'));
        }


        $this->mobilModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('i_namaMobil'),
            'kapasitas' => $this->request->getVar('i_kapasitasMobil'),
            'transmisi' => $this->request->getVar('i_transmisiMobil'),
            'harga' => $this->request->getVar('i_hargaMobil'),
            'mesin' => $this->request->getVar('i_mesinMobil'),
            'airbag' => $this->request->getVar('i_airbagMobil'),
            'gambar' => $namaGambar1,
            'gambar2' => $namaGambar2,
            'gambar3' => $namaGambar3
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin');
    }


    //--------------------------------------------------------------------

}
