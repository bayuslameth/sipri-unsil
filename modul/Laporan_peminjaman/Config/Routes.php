<?php $routes->group('laporan-peminjaman', ['namespace' => 'Modul\Laporan_peminjaman\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Laporan_peminjaman::index');
    $routes->post('datatable', 'Laporan_peminjaman::datatable');
    $routes->post('getData', 'Laporan_peminjaman::getData');
});