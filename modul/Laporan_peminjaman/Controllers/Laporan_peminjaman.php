<?php

namespace Modul\Laporan_peminjaman\Controllers;

use App\Controllers\BaseController;

use Hermawan\DataTables\DataTable;
use Modul\Pengajuan_peminjaman\Models\Model_peminjaman;

class Laporan_peminjaman extends BaseController
{
    public function __construct()
    {
        $this->peminjaman = new Model_peminjaman();
    }

    public function index()
    {
        $user_id = $this->session->get('id');

        $data = [
            'title'                 => 'Laporan Peminjaman',
            'menu'                  => 'laporan',
            'submenu'               => 'laporan-peminjaman',
        ];

        echo view('Modul\Laporan_peminjaman\Views\viewLaporan_peminjaman', $data);
    }

    
    public function datatable()
    {

        $builder = $this->db->table('peminjaman as a')->select('a.id as id, a.status as status, a.tujuan as tujuan, a.tanggal_mulai as tanggal_mulai, a.tanggal_selesai as tanggal_selesai, b.nama as nama, c.nama_ruang as nama_ruang, d.nama_fasilitas as nama_fasilitas')
                            ->join('pengguna as b', 'b.id = a.id_pengguna', 'LEFT')
                            ->join('ruang as c', 'c.id = a.id_ruang', 'LEFT')
                            ->join('fasilitas as d', 'd.id = a.id_fasilitas', 'LEFT')
                            ->orderBy('a.id', 'DESC');

        return DataTable::of($builder)
            ->addNumbering('no')
            ->add('action', function ($row) {
                return '
                <div class="d-inline-flex gap-1">
                    <button class="btn btn-primary btn-sm" 
                        data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Detail Peminjaman" 
                        onclick="detail(' . $row->id . ')">
                        <i class="bx bx-info-circle fs-5"></i>
                    </button>
                </div>';
            })
            ->add('peminjaman', function ($row) {
                if ($row->nama_ruang){
                    $peminjaman = $row->nama_ruang;
                } elseif ($row->nama_fasilitas){
                    $peminjaman = $row->nama_fasilitas;
                }
                return $peminjaman;
            })->add('status', function($row){
                if ($row->status == '1'){
                    $status = '<span class="badge bg-success">Disetujui</span>';
                } elseif ($row->status == '2') {
                    $status = '<span class="badge bg-danger">Ditolak</span>';
                } else {
                    $status = '<span class="badge badge-secondary">Menunggu Persetujuan</span>"';
                }
                return $status;
            })
            ->toJson(true);
    }


    public function getData()
    {
        $id = $this->request->getPost('id');

        $data = $this->db->table('peminjaman as a')
            ->select('a.*, 
                    b.nama as nama_peminjam, 
                    c.nama_ruang, 
                    c.lokasi as lokasi_ruang,
                    d.nama_fasilitas')
            ->join('pengguna as b', 'b.id = a.id_pengguna', 'LEFT')
            ->join('ruang as c', 'c.id = a.id_ruang', 'LEFT')
            ->join('fasilitas as d', 'd.id = a.id_fasilitas', 'LEFT')
            ->where('a.id', $id)
            ->get()
            ->getRowArray(); // atau getRowObject()

        if ($data) {
            echo json_encode([
                'status' => true,
                'data'   => $data
            ]);
        } else {
            echo json_encode([
                'status' => false
            ]);
        }
    }


}
