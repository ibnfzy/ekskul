<?php

namespace App\Models;

use CodeIgniter\Model;

class M_operator extends Model
{
    protected $table      = 'operator';
    protected $primaryKey = 'id_operator';
    protected $allowedFields = ['username_operator', 'nama_operator','pass_operator'];

}