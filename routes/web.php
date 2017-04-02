<?php

Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::group(['prefix' => 'site'], function () {
	Route::get('/', ['as' => 'sites.index', 'uses' => 'SiteController@index']);

});

Route::group(['prefix' => 'host'], function () {

	Route::get('/', ['as' => 'hosts.index', 'uses' => 'HostController@index']);

	Route::get('/{id?}', ['as' => 'hosts.view', 'uses' => 'HostController@show']);

	Route::group(['prefix' => 'create'], function () {
		Route::get('/', ['as' => 'hosts.create', 'uses' => 'HostController@create']);
		Route::post('/', ['as' => 'hosts.create', 'uses' => 'HostController@store']);
	});
});

// Route::get('/hosts', ['as' => 'hosts.index', 'uses' => 'HostController@index']);
Route::get('/fetch/{id}', ['as' => 'hosts.fetch', 'uses' => 'HostController@fetch']);
