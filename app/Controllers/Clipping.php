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
        $clipping = $this->clippingModel->findAll();
        $data = [
            'title' => 'Daftar e-Clipping',
            'clipping' => $clipping
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
}
