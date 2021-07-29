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
        $data = [
            'title' => 'Dashboard e-Clipping',
            // 'clipping' => $this->flipbookModel->getClipping()

            //pagination

            'clipping' => $this->flipbookModel->paginate(5, 'log_upload'),
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
