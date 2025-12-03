<?php $routes->group('kontak', ['namespace' => 'Modul\Kontak\Controllers'], function ($routes) {
    $routes->get('/', 'Kontak::index');
});