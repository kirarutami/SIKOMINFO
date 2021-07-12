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
        // session();
        $data = [
            'title' => 'Form e-Clipping',
            'validation' => \Config\Services::validation()
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
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[log_upload.judul]', //[nama_tabel.kolomnya]
                'errors' => [
                    'required' => '{field} klipingnya isi dong!',
                    'is_unique' => '{field} klipingnya udah ada, ganti yang laen!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/clipping/form-clipping')->withInput()->with('validation', $validation);
        }
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
