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

    public function detail($id)

    {
        $data = [
            'title' => 'Detail e-Clipping',
            'clipping' => $this->clippingModel->getClipping($id)

        ];

        if (empty($data['clipping'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kliping dengan kode ' . $id . ' tidak ditemukan.');
        }

        return view('flipbook/flipbook-detail', $data);
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
        //ambil gambar
        $fileClipping = $this->request->getFile('file');
        //pindah file ke /public/pdf/
        $fileClipping->move('pdf');
        //ambil nama file
        $namaClipping = $fileClipping->getName();



        $slug = date("d-m-Y");
        $this->clippingModel->save([
            'judul' => $this->request->getVar('judul'),
            'clipping' => $this->clippingModel->getClipping(),
            'slug' => $slug,
            'file' => $namaClipping,
            'uploaded_by' => $this->request->getVar('uploaded_by'),
            'status' => $this->request->getVar('status'),

        ]);

        session()->setFlashdata('pesan', 'e-Clipping berhasil di Unggah. Tunggu kabar dari verifikator ye bro');

        return redirect()->to('/clipping/index');
    }
    public function hapus($id)
    {

        //first thing first cari dulu gambarnya
        $clipping = $this->clippingModel->find($id);
        //hapus file
        unlink('pdf/' . $clipping['file']);
        $this->clippingModel->delete($id);
        return redirect()->to('/clipping/index');
    }
}
