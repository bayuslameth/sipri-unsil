<?php $routes->group('ajukan-peminjaman', ['namespace' => 'Modul\Ajukan_peminjaman\Controllers'], function ($routes) {
    $routes->get('/', 'Ajukan_peminjaman::index');
    $routes->post('save', 'Ajukan_peminjaman::save');

});