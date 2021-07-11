<?php

namespace App\Controllers;

use App\Models\ClippingModel;

class Clipping extends BaseController
{
    protected $clippingModel;
    public function __construct()
    {
        $this->clippingModel = new ClippingModel();
    }
    public function index()

    {
        // $clipping = $this->clippingModel->findAll();
        $data = [
            'title' => 'Daftar e-Clipping',
            'clipping' => $this->clippingModel->getClipping()
        ];



        return view('eclipping/log-upload', $data);
    }

    public function form()

    {
        $data = [
            'title' => 'Form e-Clipping'
        ];

        return view('eclipping/form-clipping', $data);
    }

    public function detail($slug)

    {
        $data = [
            'title' => 'Detail e-Clipping',
            'clipping' => $this->clippingModel->getClipping($slug)

        ];

        if (empty($data['clipping'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('e-Clipping Tanggal ' . $slug . ' tidak ditemukan.');
        }

        return view('eclipping/detail', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->clippingModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'file' => $this->request->getVar('file')
        ]);

        session()->setFlashdata('pesan', 'e-Clipping berhasil di Unggah. Tunggu kabar dari verifikator ye bro');

        return redirect()->to('/clipping/index');
    }
}
