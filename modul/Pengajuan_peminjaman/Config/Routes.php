<?php $routes->group('pengajuan-peminjaman', ['namespace' => 'Modul\Pengajuan_peminjaman\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Pengajuan_peminjaman::index');
    $routes->post('datatable', 'Pengajuan_peminjaman::datatable');
    $routes->post('approve', 'Pengajuan_peminjaman::approve');
    $routes->post('reject', 'Pengajuan_peminjaman::reject');


});