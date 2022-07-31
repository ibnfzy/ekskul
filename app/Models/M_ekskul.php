<?php

namespace App\Models;

use CodeIgniter\Model;

class M_ekskul extends Model
{
    protected $table      = 'ekskul';
    protected $primaryKey = 'id_ekskul';
    protected $allowedFields = ['ekskul', 'gambar_ekskul', 'deskripsi_ekskul'];
}