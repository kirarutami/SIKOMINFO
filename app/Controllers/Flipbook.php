<?php

namespace App\Controllers;

use App\Models\FlipbookModel;

class Flipbook extends BaseController
{
    protected $flipbookModel;
    public function __construct()
    {

        $this->flipbookModel = new FlipbookModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_log_upload') ? $this->request->getVar('page_log_upload') : 1;

        // Search berdasarkan Judul dan slug, cek FlipbookModel
        $search = $this->request->getVar('search');
        if ($search) {
            $flipbook = $this->flipbookModel->search($search);
        } else {
            $flipbook = $this->flipbookModel;
        }

        $data = [
            'title' => 'Dashboard e-Clipping',

            //Pagination
            'clipping' => $flipbook->orderBy('id', 'DESC')->paginate(5, 'log_upload'),
            'pager' => $this->flipbookModel->pager,
            'currentPage' => $currentPage
        ];


        return view('flipbook/flipbook-index', $data);
    }

    public function detail($id)

    {
        $data = [
            'title' => 'Detail e-Clipping',
            'clipping' => $this->flipbookModel->getClipping($id)

        ];

        if (empty($data['clipping'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kliping dengan kode ' . $id . ' tidak ditemukan.');
        }

        return view('flipbook/flipbook-detail', $data);
    }
}
