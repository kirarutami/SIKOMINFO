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

        return view('eclipping/', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'config' => config('Auth'),
        ];

        return view('auth/login', $data);
    }

    // public function register()
    // {
    //     $data = [
    //         'title' => 'Registrasi',
    //     ];

    //     return view('auth/register', $data);
    // }
}
