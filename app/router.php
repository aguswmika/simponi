<?php 
/*
Contoh menggunakan router


Yang ini kalo mau pake class 
	$routes['/admin/([a-z]*)'] = [
        'method'   => 'GET',
        'engine'   => 'AdminController@index',
    ];

Yang ini kalo mau pake prosedural
	$routes['/admin/([a-z]*)'] = [
        'method'   => 'GET',
        'engine'   => function($username){
            return $username;
        },
    ];

Yang ini routes default
	$routes['/'] = [
        'method'   => 'GET',
        'engine'   => 'LandingController@index',
    ];

*/



$routes['/'] = [
    'method'   => 'GET',
    'engine'   => 'LandingController@index',
];