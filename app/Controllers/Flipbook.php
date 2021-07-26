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
}
