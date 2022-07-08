<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function index()
    {
        return view('daftar/index');
    }
    public function save()
    {
        $data['nama'] = $this->request->getVar('nama');
        $data['kategori_peserta'] = $this->request->getVar('kategori_peserta');
        $data['tgl_daftar'] = $this->request->getVar('tgl_daftar');
        $data['alasan_daftar'] = $this->request->getVar('alasan_daftar');
        return view('data_peserta', $data);
   }
}
