<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dt_kriteria extends Model
{
    protected $table      = 'dt_kriteria';
    protected $primaryKey = 'id_dt_kriteria';
    protected $allowedFields = ['id_kriteria', 'kriteria', 'keterangan','nilai'];

}