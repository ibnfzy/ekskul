<?php

namespace App\Models;

use CodeIgniter\Model;

class M_detail_siswa extends Model
{
    protected $table      = 'detail_siswa';
    protected $primaryKey = 'id_detail_siswa';
    protected $allowedFields = ['id_siswa', 'id_exkul','minat','bakat','jadwal_latihan','tujuan'];

}