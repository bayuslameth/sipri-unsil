<?php

namespace Modul\Ruang_pembelajaran\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

use CodeIgniter\Validation\ValidationInterface;

class Model_ruang extends Model
{
    protected $table              = 'ruang';
    protected $primaryKey         = 'id';
    protected $returnType         = 'array';

    protected $allowedFields      = [
        'nama_ruang',
        'lokasi',
        'kapasitas',
        'status'
    ];

}
