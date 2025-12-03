<?php

namespace Modul\Pengajuan_peminjaman\Controllers;

use App\Controllers\BaseController;

use Hermawan\DataTables\DataTable;
use Modul\Pengajuan_peminjaman\Models\Model_peminjaman;

class Pengajuan_peminjaman extends BaseController
{
    public function __construct()
    {
        $this->peminjaman = new Model_peminjaman();
    }

    public function index()
    {
        $user_id = $this->session->get('id');

        $data = [
            'title'                 => 'Pengajuan Peminjaman',
            'menu'                  => 'peminjaman',
            'submenu'               => 'pengajuan-peminjaman',
        ];

        echo view('Modul\Pengajuan_peminjaman\Views\viewPengajuan_peminjaman', $data);
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
                $disabled = ($row->status == '1' || $row->status == '2') 
                            ? 'disabled' 
                            : '';
                return '
                <div class="d-inline-flex gap-1">
                    <button class="btn btn-success btn-sm '.$disabled.'" 
                        data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Setujui" 
                        onclick="approve(' . $row->id . ', \'' . addslashes($row->nama) . '\')">
                        <i class="bx bx-check fs-5"></i>
                    </button>

                    <button class="btn btn-label-danger btn-sm '.$disabled.'" 
                        data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Tolak" 
                        onclick="reject(' . $row->id . ', \'' . addslashes($row->nama) . '\')">
                        <i class="bx bx-x fs-5"></i>
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

    public function approve()
    {
        $id = $this->request->getPost('id');
        $user_id = $this->session->get('id');

        $data['status'] = 1;
        $update = $this->peminjaman->update($id, $data);

        if ($update) {
            $response = [
                'status' => TRUE,
                'data'   => $data,
            ];
        } else {
            $response = [
                'status' => false,
            ];
        }

        echo json_encode($response);
    }

    public function reject()
    {
        $id = $this->request->getPost('id');
        $user_id = $this->session->get('id');

        $data['status'] = 2;
        $update = $this->peminjaman->update($id, $data);

        if ($update) {
            $response = [
                'status' => TRUE,
                'data'   => $data,
            ];
        } else {
            $response = [
                'status' => false,
            ];
        }

        echo json_encode($response);
    }
}
