<?php $routes->group('home', ['namespace' => 'Modul\Home\Controllers'], function ($routes) {
    $routes->get('/', 'Home::index');
});