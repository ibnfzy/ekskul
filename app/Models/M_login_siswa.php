<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login_siswa extends Model
{
    protected $table      = 'login_siswa';
    protected $primaryKey = 'id_login_siswa';
    protected $allowedFields = ['id_siswa', 'username_siswa','username_siswa','bakat','username_siswan','login_terakhir'];

}