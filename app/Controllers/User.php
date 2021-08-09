<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar e-Clipping',
            'config' => config('Auth'),
        ];

        return view('eclipping/log-upload', $data);
    }
}
