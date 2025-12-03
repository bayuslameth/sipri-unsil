<?php

namespace Modul\Profile\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        $user_id = $this->session->get('id');

        $users = $this->db->table('pengguna')->where('id', $user_id)->get()->getRow();

        $data = [
            'title'                 => 'Profile',
            'menu'                  => 'Profile',
            'submenu'               => '',
            'users'                 => $users,
        ];

        echo view('Modul\Profile\Views\viewProfile', $data);
    }
}
