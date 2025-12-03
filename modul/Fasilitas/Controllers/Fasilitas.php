<?php

namespace Modul\Fasilitas\Controllers;

use App\Controllers\BaseController;

class Fasilitas extends BaseController
{
    public function index()
    {
        // $user_id = $this->session->get('user_id');

        $data = [
            'title'                 => 'Fasilitas',
            'menu'                  => 'Fasilitas',
            'submenu'               => '',
        ];

        echo view('Modul\Fasilitas\Views\viewFasilitas', $data);
    }
}
