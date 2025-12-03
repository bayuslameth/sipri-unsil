<?php $routes->group('sarana', ['namespace' => 'Modul\Sarana\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Sarana::index');
    $routes->post('datatable', 'Sarana::datatable');
    $routes->post('save', 'Sarana::save');
    $routes->post('remove', 'Sarana::remove');
    $routes->post('getData', 'Sarana::getData');


});