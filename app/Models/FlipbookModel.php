<?php

namespace App\Models;

use CodeIgniter\Model;

class FlipbookModel extends Model
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

    public function search($search)
    {
        //query builder
        $builder = $this->table('log_upload');
        $builder = $this->like('judul', $search);
        $builder = $this->like('slug', $search);

        return $builder;
    }
}
