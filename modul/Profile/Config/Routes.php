<?php $routes->group('profile', ['namespace' => 'Modul\Profile\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Profile::index');
});