<?php

namespace Modul\Pengajuan_peminjaman\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

use CodeIgniter\Validation\ValidationInterface;

class Model_peminjaman extends Model
{
    protected $table              = 'peminjaman';
    protected $primaryKey         = 'id';
    protected $returnType         = 'array';

    protected $allowedFields      = [
        'id_ruang',
        'id_pengguna',
        'id_fasilitas',
        'tujuan',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_mulai',
        'waktu_selesai',
        'durasi_menit',
        'status', // 1 approve, 2 reject
        'created_at',
    ];

}
