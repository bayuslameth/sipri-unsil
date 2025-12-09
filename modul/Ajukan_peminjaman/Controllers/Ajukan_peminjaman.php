<?php

namespace Modul\Ajukan_peminjaman\Controllers;

use App\Controllers\BaseController;
use Modul\Pengajuan_peminjaman\Models\Model_peminjaman;

class Ajukan_peminjaman extends BaseController
{
    public function __construct()
    {
        $this->peminjaman = new Model_peminjaman();
    }

    public function index()
    {
        // $user_id = $this->session->get('user_id');

        $isLoggin = $this->session->get('@#)login(#@');

        $fasilitas = $this->db->table('fasilitas')->get()->getResultArray();
        $ruang = $this->db->table('ruang')->where('status', 1)->get()->getResultArray();

        $data = [
            'title'                 => 'Ajukan Peminjaman',
            'menu'                  => 'Ajukan-peminjaman',
            'submenu'               => '',
            'ruang'                 => $ruang,
            'fasilitas'             => $fasilitas,
            'isLoggin'              => $isLoggin,
        ];

        echo view('Modul\Ajukan_peminjaman\Views\viewAjukan_peminjaman', $data);
    }

    public function save()
    {
        // 1. Definisikan Rules Validasi sesuai Form HTML
        $rules = [
            'no_wa' => [
                'label' => 'No. WhatsApp',
                'rules' => 'required|numeric|min_length[10]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} minimal 10 digit',
                ]
            ],
            'id_ruang' => [
                'label' => 'Ruangan / Fasilitas',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan pilih {field}',
                ]
            ],
            'tujuan' => [
                'label' => 'Tujuan Peminjaman',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'tanggal_mulai' => [
                'label' => 'Tanggal Mulai',
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'tanggal_selesai' => [
                'label' => 'Tanggal Selesai',
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'waktu_mulai' => [
                'label' => 'Waktu Mulai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'waktu_selesai' => [
                'label' => 'Waktu Selesai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
        ];

        // 2. Cek Validasi
        if (!$this->validate($rules)) {
            $respond = [
                'status' => FALSE,
                'errors' => $this->validation->getErrors(),
            ];
        } else {
            // Ambil Data dari Post & Session
            $user_id = session()->get('id'); // Pastikan session ID pengguna sudah ada saat login
            
            // Ambil inputan tanggal dan waktu untuk kalkulasi durasi
            $tgl_mulai = $this->request->getPost('tanggal_mulai');
            $tgl_selesai = $this->request->getPost('tanggal_selesai');
            $jam_mulai = $this->request->getPost('waktu_mulai');
            $jam_selesai = $this->request->getPost('waktu_selesai');

            // Kalkulasi Durasi dalam Menit
            $start = new \DateTime($tgl_mulai . ' ' . $jam_mulai);
            $end = new \DateTime($tgl_selesai . ' ' . $jam_selesai);
            
            // Cek logika tanggal (End tidak boleh sebelum Start)
            if ($end <= $start) {
                echo json_encode([
                    'status' => FALSE,
                    'errors' => ['waktu_selesai' => 'Waktu selesai harus lebih dari waktu mulai']
                ]);
                return;
            }

            $diff = $start->diff($end);
            $durasi_menit = ($diff->days * 24 * 60) + ($diff->h * 60) + $diff->i;

            // Persiapan Data Array untuk disimpan ke Model
            $data = [
                'id_pengguna'     => $user_id,
                'id_ruang'        => $this->request->getPost('id_ruang'),
                'id_fasilitas'    => null, // Set null jika logic-nya hanya pinjam ruang, atau sesuaikan
                'tujuan'          => $this->request->getPost('tujuan'),
                'tanggal_mulai'   => $tgl_mulai,
                'tanggal_selesai' => $tgl_selesai,
                'waktu_mulai'     => $jam_mulai,
                'waktu_selesai'   => $jam_selesai,
                'durasi_menit'    => $durasi_menit,
                'status'          => 0, // Request: Set status 0 (Pending)
                'created_at'      => date('Y-m-d H:i:s'),
            ];
            
            // Catatan: Field 'no_wa' ada di form tapi tidak ada di $allowedFields Model.
            // Jika ingin disimpan, tambahkan kolom 'no_wa' di tabel peminjaman & Model, 
            // atau update data user terkait.

            // 3. Simpan ke Database
            $save = $this->peminjaman->insert($data);

            if ($save) {
                $notif = "Pengajuan peminjaman berhasil dikirim, menunggu persetujuan.";
                
                // Opsional: Log Activity
                // $this->log_activity->save([...]); 

                $respond = [
                    'status' => TRUE,
                    'notif' => $notif
                ];
            } else {
                $respond = [
                    'status' => FALSE,
                    'notif'  => 'Gagal menyimpan data ke database.'
                ];
            }
        }

        echo json_encode($respond);
    }
}
