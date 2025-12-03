<?php

namespace Modul\Ruang_pembelajaran\Controllers;

use App\Controllers\BaseController;

use Hermawan\DataTables\DataTable;
use Modul\Ruang_pembelajaran\Models\Model_ruang;

class Ruang_pembelajaran extends BaseController
{
    public function __construct()
    {
        $this->ruang = new Model_ruang();
    }

    public function index()
    {
        $user_id = $this->session->get('id');

        $users = $this->db->table('pengguna')->where('id', $user_id)->get()->getRow();

        $data = [
            'title'                 => 'Ruang Belajar',
            'menu'                  => 'sarpras',
            'submenu'               => 'ruang-pembelajaran',
            'users'                 => $users,
        ];

        echo view('Modul\Ruang_pembelajaran\Views\viewRuang_pembelajaran', $data);
    }

    
    public function datatable()
    {

        $builder = $this->db->table('ruang')
            ->select('id as id, nama_ruang as nama_ruang, lokasi as lokasi, kapasitas as kapasitas')
            ->orderBy('id', 'DESC');

        return DataTable::of($builder)
            ->addNumbering('no')
            ->setSearchableColumns(['LOWER(nama_ruang)'])
            ->add('action', function ($row) {
                return '
                <div class="d-inline-flex gap-1">
                    <button class="btn btn-label-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah" onclick="edit(' . $row->id . ')">
                        <i class="bx bx-edit fs-5"></i>
                    </button>
                    <button class="btn btn-label-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" onclick="remove(' . $row->id . ', \'' . addslashes($row->nama_ruang) . '\')">
                        <i class="bx bx-trash fs-5"></i>
                    </button>
                </div>';
            })->add('kapasitas', function ($row) {
                return ($row->kapasitas) . ' Orang';
            })
            ->toJson(true);
    }

    public function getData()
    {
        $id = $this->request->getPost('id');

        $data = $this->db->table('ruang')->where('id', $id)->get()->getRow();

        if ($data) {
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

    public function save()
    {

        $rules = [
            'nama_ruang'  => [
                'label'  => 'nama lokasi',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
            'lokasi'  => [
                'label'  => 'Lokasi',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
            'kapasitas'  => [
                'label'  => 'Kategori Pengguna',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            $errors = [
                'nama_ruang'         => $this->validation->getError('nama_ruang'),
                'lokasi'         => $this->validation->getError('lokasi'),
                'kapasitas'    => $this->validation->getError('kapasitas'),
            ];

            $respond = [
                'status_form' => FALSE,
                'errors' => $errors,
            ];
        } else {
            $user_id        = $this->session->get('user_id');
            $id             = $this->request->getPost('id');
            $nama_ruang           = $this->request->getPost('nama_ruang');
            $lokasi         = $this->request->getPost('lokasi');
            $kapasitas      = $this->request->getPost('kapasitas');


            $data = [
                'id'            => $id,
                'nama_ruang'          => $nama_ruang,
                'lokasi'        => $lokasi,
                'kapasitas'     => $kapasitas,
            ];

            $save = $this->ruang->save($data);

            if ($save) {
                if ($id) {
                    $notif = "Ruangan pembelajaran telah diperbarui";

                    $log = [
                        'admin_id'    => $user_id,
                        'time'        => date('Y-m-d H:i:s'),
                        'ip_address'  => $this->request->getIPAddress(),
                        'description' => 'mengedit kategori faq: ' . $nama_ruang
                    ];
                } else {
                    $notif = "Ruangan pembelajaran baru telah ditambahkan";
                }
                $respond = [
                    'status'    => TRUE,
                    'notif'     => $notif
                ];
            } else {
                $respond = [
                    'status'    => FALSE
                ];
            }
        }

        echo json_encode($respond);
    }

    public function remove()
    {
        $id = $this->request->getPost('id');
        $user_id = $this->session->get('id');
        $nama_ruang = $this->request->getPost('nama_ruang');

        try {
            $delete = $this->ruang->delete($id);

            return $this->response->setJSON(['status' => true, 'nama_ruang' => $nama_ruang]);
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            $errorMessage = $e->getMessage();

            if (strpos($errorMessage, 'foreign key constraint') !== false) {
                return $this->response->setJSON(['status' => false, 'nama_ruang' => $nama_ruang]);
            } else {
                return $this->response->setJSON(['status' => false, 'nama_ruang' => $nama_ruang]);
            }
        }
    }
}
