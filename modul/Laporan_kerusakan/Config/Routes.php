<?php $routes->group('laporan-kerusakan', ['namespace' => 'Modul\Laporan_kerusakan\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Laporan_kerusakan::index');
    $routes->post('datatable', 'Laporan_kerusakan::datatable');
    $routes->post('getData', 'Laporan_kerusakan::getData');
});