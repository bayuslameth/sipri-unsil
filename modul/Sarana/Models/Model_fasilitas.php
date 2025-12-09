<?php

namespace Modul\Sarana\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

use CodeIgniter\Validation\ValidationInterface;

class Model_fasilitas extends Model
{
    protected $table              = 'fasilitas';
    protected $primaryKey         = 'id';
    protected $returnType         = 'array';

    protected $allowedFields      = [
        'nama_fasilitas',
        'tipe', // 1 ruang 2 barang
        'kondisi', 
    ];

}
