<?php $routes->group('ruang-pembelajaran', ['namespace' => 'Modul\Ruang_pembelajaran\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Ruang_pembelajaran::index');
    $routes->post('datatable', 'Ruang_pembelajaran::datatable');
    $routes->post('save', 'Ruang_pembelajaran::save');
    $routes->post('remove', 'Ruang_pembelajaran::remove');
    $routes->post('getData', 'Ruang_pembelajaran::getData');


});