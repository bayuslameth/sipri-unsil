<?php $routes->group('fasilitas', ['namespace' => 'Modul\Fasilitas\Controllers'], function ($routes) {
    $routes->get('/', 'Fasilitas::index');
});