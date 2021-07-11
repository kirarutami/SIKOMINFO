<?php

namespace App\Models;

use CodeIgniter\Model;

class ClippingModel extends Model
{
    protected $table = 'log_upload';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'file', 'uploaded_by'];

    public function getClipping($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
