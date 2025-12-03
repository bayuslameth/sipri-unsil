<?php

namespace Modul\Laporan_kerusakan\Controllers;

use App\Controllers\BaseController;

use Hermawan\DataTables\DataTable;
use Modul\Laporan_kerusakan\Models\Model_kerusakan;

class Laporan_kerusakan extends BaseController
{
    public function __construct()
    {
        $this->kerusakan = new Model_kerusakan();
    }

    public function index()
    {
        $user_id = $this->session->get('id');

        $data = [
            'title'                 => 'Laporan Kerusakan',
            'menu'                  => 'laporan',
            'submenu'               => 'laporan-kerusakan',
        ];

        echo view('Modul\Laporan_kerusakan\Views\viewLaporan_kerusakan', $data);
    }

    
    public function datatable()
    {
        $builder = $this->db->table('kerusakan as a')->select('a.id as id, a.deskripsi as deskripsi, a.status_perbaikan as status, a.tanggal_lapor as tanggal_lapor, b.nama as nama, c.nama_ruang as nama_ruang, d.nama_fasilitas as nama_fasilitas')
                            ->join('peminjaman as e', 'e.id = a.id_peminjaman', 'LEFT')
                            ->join('pengguna as b', 'b.id = e.id_pengguna', 'LEFT')
                            ->join('ruang as c', 'c.id = e.id_ruang', 'LEFT')
                            ->join('fasilitas as d', 'd.id = e.id_fasilitas', 'LEFT')
                            ->orderBy('a.id', 'DESC');

        return DataTable::of($builder)
            ->addNumbering('no')
            ->add('action', function ($row) {
                return '
                <div class="d-inline-flex gap-1">
                    <button class="btn btn-primary btn-sm" 
                        data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Detail Kerusakan" 
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
                    $status = '<span class="badge bg-success">Diperbaiki</span>';
                } elseif ($row->status == '2') {
                    $status = '<span class="badge bg-danger">Ditunda</span>';
                } else {
                    $status = '<span class="badge badge-secondary">Laporan Diterima</span>"';
                }
                return $status;
            })
            ->toJson(true);
    }


    public function getData()
    {
        $id = $this->request->getPost('id');

        $data = $this->db->table('kerusakan as a')
            ->select('a.*, 
                    b.nama as nama_peminjam, 
                    c.nama_ruang, 
                    c.lokasi as lokasi_ruang,
                    d.nama_fasilitas')
            ->join('peminjaman as e', 'e.id = a.id_peminjaman', 'LEFT')
            ->join('pengguna as b', 'b.id = e.id_pengguna', 'LEFT')
            ->join('ruang as c', 'c.id = e.id_ruang', 'LEFT')
            ->join('fasilitas as d', 'd.id = e.id_fasilitas', 'LEFT')
            ->where('a.id', $id)
            ->get()
            ->getRowArray();

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
