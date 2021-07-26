<?php

namespace App\Controllers;

class Flipbook extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard e-Clipping',
        ];


        return view('flipbook/flipbook-index', $data);
    }

    public function detail()

    {
        $data = [
            'title' => 'Detail e-Clipping',
            // 'clipping' => $this->clippingModel->getClipping()

        ];

        // if (empty($data['clipping'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('e-Clipping Tanggal ' .  . ' tidak ditemukan.');
        // }

        return view('flipbook/flipbook-detail', $data);
    }
}
