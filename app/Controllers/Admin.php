<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Administrator',
        ];

        return view('admin/user', $data);
    }
}
