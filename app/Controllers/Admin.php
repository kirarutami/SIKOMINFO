<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');

        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        $data['title'] = 'Daftar Administrator';
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/user', $data);
    }

    public function hapus($userid)
    {
        $user = $this->adminModel->find($userid);
        $this->adminModel->delete($userid);
        return redirect()->to('admin/index');
    }
}
