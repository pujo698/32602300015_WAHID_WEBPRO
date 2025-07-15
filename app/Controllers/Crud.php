<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll(); 
        return view('crud/view', $data); 
    }


    public function tambah()
    {
        if(isset($_POST['nim'])){

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $universitas = $_POST['universitas'];
            $nomor_handphone = $_POST['no_hp'];

            $upload = [
                'nim' => $nim,
                'nama' => $nama,
                'prodi' => $prodi,
                'universitas' => $universitas,
                'nomor_handphone' => $nomor_handphone // 'no_hp' ngko ganti dadi nomor_handphone
            ];

            $this->mahasiswa->insert($upload);

            return redirect()->to(base_url('/crud'));
        }else{
            return view('crud/upload');
        }
        
    }

public function edit($nim)
{
    // 7. Ambil data mahasiswa berdasarkan nim
    $dataMahasiswa = $this->mahasiswa->where('nim', $nim)->first();

    // 8. Masukkan ke array dan kirim ke edit.php
    $data = ['edit' => $dataMahasiswa];

    return view('CRUD/edit', $data);
}
public function editan()
{
    // Ambil input dari form
    $oldNim = $this->request->getPost('old_nim');
    $newData = [
        'nim'             => $this->request->getPost('nim'),
        'nama'            => $this->request->getPost('nama'),
        'prodi'           => $this->request->getPost('prodi'),
        'universitas'     => $this->request->getPost('universitas'),
        'nomor_handphone' => $this->request->getPost('no_hp')
    ];

    // 11. Update data berdasarkan NIM lama
    $this->mahasiswa->where('nim', $oldNim)->set($newData)->update();

    // Redirect kembali ke halaman utama
    return redirect()->to('/crud');
}

public function hapus($nim)
{
    // 4. Hapus data berdasarkan NIM (PK)
    $this->mahasiswa->where('nim', $nim)->delete();

    // Redirect ke halaman utama
    return redirect()->to('/crud');
}


}
