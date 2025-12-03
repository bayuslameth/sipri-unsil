<?php

namespace Modul\Home\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // $user_id = $this->session->get('user_id');

        $data = [
            'title'                 => 'Home',
            'menu'                  => 'home',
            'submenu'               => '',
        ];

        echo view('Modul\Home\Views\viewHome', $data);
    }
}
