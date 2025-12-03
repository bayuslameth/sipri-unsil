<?php

namespace Modul\Sarana\Controllers;

use App\Controllers\BaseController;

use Hermawan\DataTables\DataTable;
use Modul\Sarana\Models\Model_fasilitas;

class Sarana extends BaseController
{
    public function __construct()
    {
        $this->fasilitas = new Model_fasilitas();
    }

    public function index()
    {
        $user_id = $this->session->get('id');

        $users = $this->db->table('pengguna')->where('id', $user_id)->get()->getRow();

        $data = [
            'title'                 => 'Ruang Belajar',
            'menu'                  => 'sarpras',
            'submenu'               => 'sarana',
            'users'                 => $users,
        ];

        echo view('Modul\Sarana\Views\viewSarana', $data);
    }

    
    public function datatable()
    {

        $builder = $this->db->table('fasilitas')
            ->select('id as id, nama_fasilitas as nama_fasilitas, tipe as tipe, kondisi as kondisi')
            ->orderBy('id', 'DESC');

        return DataTable::of($builder)
            ->addNumbering('no')
            ->setSearchableColumns(['LOWER(nama_fasilitas)'])
            ->add('action', function ($row) {
                return '
                <div class="d-inline-flex gap-1">
                    <button class="btn btn-label-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah" onclick="edit(' . $row->id . ')">
                        <i class="bx bx-edit fs-5"></i>
                    </button>
                    <button class="btn btn-label-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" onclick="remove(' . $row->id . ', \'' . addslashes($row->nama_fasilitas) . '\')">
                        <i class="bx bx-trash fs-5"></i>
                    </button>
                </div>';
            })->add('tipe', function ($row) {
                if ($row->tipe == '1'){
                    $tipe = 'Ruangan';
                } elseif ($row->tipe == '2'){
                    $tipe = "Barang";
                }
                return $tipe;
            })
            ->toJson(true);
    }

    public function getData()
    {
        $id = $this->request->getPost('id');

        $data = $this->db->table('fasilitas')->where('id', $id)->get()->getRow();

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
            'nama_fasilitas'  => [
                'label'  => 'nama tipe',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
            'tipe'  => [
                'label'  => 'tipe',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
            'kondisi'  => [
                'label'  => 'Kategori Pengguna',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            $errors = [
                'nama_fasilitas'         => $this->validation->getError('nama_fasilitas'),
                'tipe'         => $this->validation->getError('tipe'),
                'kondisi'    => $this->validation->getError('kondisi'),
            ];

            $respond = [
                'status_form' => FALSE,
                'errors' => $errors,
            ];
        } else {
            $user_id        = $this->session->get('id');
            $id             = $this->request->getPost('id');
            $nama_fasilitas     = $this->request->getPost('nama_fasilitas');
            $tipe         = $this->request->getPost('tipe');
            $kondisi      = $this->request->getPost('kondisi');


            $data = [
                'id'            => $id,
                'nama_fasilitas'    => $nama_fasilitas,
                'tipe'        => $tipe,
                'kondisi'     => $kondisi,
            ];

            $save = $this->fasilitas->save($data);

            if ($save) {
                if ($id) {
                    $notif = "Ruangan pembelajaran telah diperbarui";

                    $log = [
                        'admin_id'    => $user_id,
                        'time'        => date('Y-m-d H:i:s'),
                        'ip_address'  => $this->request->getIPAddress(),
                        'description' => 'mengedit kategori faq: ' . $nama_fasilitas
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
        $nama_fasilitas = $this->request->getPost('nama_fasilitas');

        try {
            $delete = $this->fasilitas->delete($id);

            return $this->response->setJSON(['status' => true, 'nama_fasilitas' => $nama_fasilitas]);
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            $errorMessage = $e->getMessage();

            if (strpos($errorMessage, 'foreign key constraint') !== false) {
                return $this->response->setJSON(['status' => false, 'nama_fasilitas' => $nama_fasilitas]);
            } else {
                return $this->response->setJSON(['status' => false, 'nama_fasilitas' => $nama_fasilitas]);
            }
        }
    }
}
