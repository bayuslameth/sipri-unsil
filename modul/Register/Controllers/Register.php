<?php

namespace Modul\Register\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        $id = $this->session->get('id');

        if ($id) {
            return redirect()->to(base_url('dashboard'));
        } else {
            return view('Modul\Register\Views\viewRegister');
        }
    }

    public function save()
    {
        $rules = [
            'nama' => [
                'label'  => 'Nama',
                'rules'  => 'required|min_length[3]',
                'errors' => ['required' => '{field} harus diisi']
            ],
            'username' => [
                'label'  => 'Username',
                'rules'  => 'required|min_length[4]|is_unique[pengguna.username]',
                'errors' => [
                    'required'   => '{field} harus diisi',
                    'is_unique'  => 'Username sudah terdaftar'
                ]
            ],
            'no_telepon' => [
                'label'  => 'No Telepon',
                'rules'  => 'permit_empty|numeric|min_length[10]|max_length[15]',
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[6]',
                'errors' => ['required' => '{field} harus diisi']
            ],
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status_form' => false,
                'errors'      => $this->validator->getErrors()
            ]);
        }

        $username   = $this->request->getPost('username');
        $nama       = $this->request->getPost('nama');
        $no_telepon = $this->request->getPost('no_telepon');
        $password   = $this->request->getPost('password');

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'username'   => $username,
            'nama'       => $nama,
            'password'   => $hashedPassword,           // Fixed: sekarang pakai 2 argumen
            'no_telepon' => $no_telepon ?? null,
            'role'       => 1,                         // 1 = mahasiswa (sesuai TINYINT di DB)
            'created_at' => date('Y-m-d H:i:s')
        ];

        $save = $this->db->table('pengguna')->insert($data);

        if ($save) {
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Register berhasil! Tunggu sebentar ya, kamu bakal langsung dibawa ke Login.'
            ]);
        }

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Registrasi gagal, silakan coba lagi.'
        ]);
    }

}
