<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'username', 'email', 'fullname'];

    public function getUser($userid = false)
    {
        if ($userid == false) {
            return $this->orderBy('id')->findAll();
        }

        return $this->where(['id' => $userid])->first();
    }
}
