<?php

namespace App\Controllers;

use App\Models\ClippingModel;

class Flipbook extends BaseController
{
    protected $clippingModel;
    public function __construct()
    {

        $this->clippingModel = new ClippingModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard e-Clipping',
            'clipping' => $this->clippingModel->getClipping()
        ];


        return view('flipbook/flipbook-index', $data);
    }

    // public function detail($id)

    // {
    //     $data = [
    //         'title' => 'Detail e-Clipping',
    //         'clipping' => $this->clippingModel->getClipping($id)

    //     ];

    //     if (empty($data['clipping'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Kliping dengan kode ' . $id . ' tidak ditemukan.');
    //     }

    //     return view('flipbook/flipbook-detail', $data);
    // }
}
