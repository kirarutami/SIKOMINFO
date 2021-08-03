<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar e-Clipping',
        ];

        return view('eclipping/log-upload', $data);
    }
}
