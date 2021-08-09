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
        $data = [
            'title' => 'Daftar e-Clipping',
            'clipping' => $this->clippingModel->getClipping(),
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
    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[log_upload.judul]', //[nama_tabel.kolomnya]
                'errors' => [
                    'required' => '{field} klipingnya isi dong!',
                    'is_unique' => '{field} klipingnya udah ada, ganti yang laen!'
                ]
            ],

            'file' => [
                'rules' => 'uploaded[file]|max_size[file,25600]|mime_in[file,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih e-Clipping terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar',
                    'mime_in' => 'Format file salah.'
                ]
            ],
        ])) {
            return redirect()->to('/clipping/form')->withInput();
        }
        $fileClipping = $this->request->getFile('file');
        $fileClipping->move('pdf');
        $namaClipping = $fileClipping->getName();



        $slug = date("d-m-Y");
        $this->clippingModel->save([
            'judul' => $this->request->getVar('judul'),
            'clipping' => $this->clippingModel->getClipping(),
            'slug' => $slug,
            'file' => $namaClipping,
            'uploaded_by' => $this->request->getVar('uploaded_by'),
            'status' => $this->request->getVar('status'),
            'deskripsi' => $this->request->getVar('deskripsi'),

        ]);

        session()->setFlashdata('pesan', 'e-Clipping berhasil di Unggah. Tunggu kabar dari verifikator ye bro');

        return redirect()->to('/clipping/index');
    }
    public function hapus($id)
    {
        $clipping = $this->clippingModel->find($id);
        unlink('pdf/' . $clipping['file']);
        $this->clippingModel->delete($id);
        return redirect()->to('/clipping/index');
    }
}
