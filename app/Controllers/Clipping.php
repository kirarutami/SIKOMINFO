<?php 
namespace App\Controllers;

class Clipping extends BaseController
{
    public function index ()

    {
        $data = [
            'title' => 'Daftar e-Clipping'
        ];

        return view('eclipping/log-upload', $data);
    }

    public function form ()

    {
        $data = [
            'title' => 'Daftar e-Clipping'
        ];

        return view('eclipping/form-clipping', $data);
    }
}
