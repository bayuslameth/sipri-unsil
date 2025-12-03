<?php

namespace Modul\Laporan_kerusakan\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

use CodeIgniter\Validation\ValidationInterface;

class Model_kerusakan extends Model
{
    protected $table              = 'kerusakan';
    protected $primaryKey         = 'id';
    protected $returnType         = 'array';

    protected $allowedFields      = [
        'id_peminjaman',
        'deskripsi',
        'foto_path',
        'status_perbaikan', // 1 fixed, 2 on going, 3 laporan diterima
        'tanggal_lapor',
    ];

}
