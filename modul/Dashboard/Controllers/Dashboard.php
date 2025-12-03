<?php

namespace Modul\Dashboard\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
         $user_id = $this->session->get('id');

         $total_user = $this->db->query("SELECT SUM(id) as total FROM pengguna")->getRow()->total;
         $total_peminjaman = $this->db->query("SELECT SUM(id) as total FROM peminjaman")->getRow()->total;
         $total_fasilitas = $this->db->query("SELECT SUM(id) as total FROM fasilitas")->getRow()->total;
         $total_barang = $this->db->query("SELECT SUM(id) as total FROM fasilitas WHERE tipe='2'")->getRow()->total;
         $total_kerusakan = $this->db->query("SELECT SUM(id) as total FROM kerusakan")->getRow()->total;
         $total_ruangan = $this->db->query("SELECT SUM(id) as total FROM ruang")->getRow()->total;

        $data = [
            'title'                 => 'Dashboard',
            'menu'                  => 'dashboard',
            'submenu'               => '',
            'total_user'            => $total_user,
            'total_peminjaman'      => $total_peminjaman,
            'total_fasilitas'      => $total_fasilitas,
            'total_barang'          => $total_barang,
            'total_kerusakan'       => $total_kerusakan,
            'total_ruangan'         => $total_ruangan,
        ];

        echo view('Modul\Dashboard\Views\viewDashboard', $data);
    }
}
