<?php

namespace App\Models;

use CodeIgniter\Model;

class ClippingModel extends Model
{
    protected $table = 'log_upload';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'file', 'status', 'deskripsi', 'uploaded_by'];

    public function getClipping($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id', 'desc')->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
