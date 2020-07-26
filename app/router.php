<?php 
/*
Contoh menggunakan router


Yang ini kalo mau pake class 
	$routes['admin/:param'] = 'Landing@admin';

Yang ini kalo mau pake prosedural
	$routes['admin/:param'] = function($halo){
		echo $halo;
	};

Yang ini routes default
	$routes['default'] = 'Landing@index';

*/



$routes['/'] = [
    'method'   => 'GET',
    'engine'   => 'LandingController@index',
];
$routes['/apem/([0-9]*)/donat/([a-z]*)'] = [
    'method'   => 'GET',
    'engine'   => function($apem, $bolu){
        echo $apem.$bolu;
    }
];