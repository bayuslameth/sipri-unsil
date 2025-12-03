<?php

namespace Modul\Login\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $id = $this->session->get('id');

        if ($id) {
            return redirect()->to(base_url('dashboard'));
        } else {
            return view('Modul\Login\Views\viewLogin');
        }
    }

    public function doLogin()
    {
        $rules = $this->validate([
            'username'  => [
                'label'  => 'Username',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ],
            'password'  => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required'     => '{field} harus diisi',
                ]
            ]
        ]);

        if (!$rules) {
            $errors = [
                'username'  => $this->validation->getError('username'),
                'password'  => $this->validation->getError('password')
            ];

            $respond = [
                'status_form' => FALSE,
                'errors' => $errors,
            ];
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user =  $this->db->table("pengguna")->where('username', $username)->get()->getRow();

            if ($user && password_verify($password, $user->password)) {
                $ses_data = [
                    'id'                  => $user->id,
                    'nama'                => $user->nama,
                    'username'            => $user->username,
                    'no_telepon'          => $user->no_telepon,
                    'password'            => $user->password,
                    'role'                => $user->role,
                    '@#)login(#@'         => TRUE
                ];

                $this->session->set($ses_data);

                $respond = [
                    'status'  => TRUE,
                    'message' => 'Login berhasil!. Tunggu sebentar ya, kamu bakal langsung dibawa ke Dashboard.'
                ];
                    
            } else {
                $respond = [
                    'status' => FALSE,
                    'message' => 'Akun kamu nggak ketemu nih. Coba cek lagi email atau password-nya ya.'
                ];
            }
        }
        echo json_encode($respond);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
