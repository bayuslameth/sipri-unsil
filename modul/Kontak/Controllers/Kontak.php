<?php

namespace Modul\Kontak\Controllers;

use App\Controllers\BaseController;

class Kontak extends BaseController
{
    public function index()
    {
        // $user_id = $this->session->get('user_id');

        $data = [
            'title'                 => 'Kontak',
            'menu'                  => 'Kontak',
            'submenu'               => '',
        ];

        echo view('Modul\Kontak\Views\viewKontak', $data);
    }
}
