<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dt_ekskul extends Model
{
    protected $table      = 'dt_ekskul';
    protected $primaryKey = 'id_dt_ekskul';
    protected $allowedFields = [
        'id_ekskul', 
        'nama_ekskul', 
        'id_kriteria', 
        'nama_kriteria',
        'deskripsi'
    ];
}