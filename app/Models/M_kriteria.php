<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kriteria extends Model
{
    protected $table      = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['kriteria', 'bobot'];
}