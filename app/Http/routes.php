<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Rutas del frontend */

Route::get('/', [
	// 'as' => 'contact.form',
		'as' => 'front.index',
	function(){
		return view('front.index');
	}
	]);

Route::post('/call', [
	'as' => 'front.index.callme',
	'uses' => 'FrontController@callMe',
	]);

Route::post('/', [
	'as' => 'front.index.form',
	'uses' => 'FrontController@contactConfirmMailSend',
	]);

Route::get('/blog',[
	'as' => 'front.blog.index',
	'uses' => 'FrontController@index'
	]);

Route::get('categories/{name}', [
	'uses' => 'FrontController@searchCategory',
	'as' => 'front.search.category'
	]);

Route::get('tags/{name}', [
	'uses' => 'FrontController@searchTag',
	'as' => 'front.search.tag'
	]);

Route::get('article/{slug}', [
	'uses' => 'FrontController@viewArticle',
	'as' => 'front.view.article'
	]);

/////////////////////////////////////////
Route::get('register', function(){
	dd('Esta ruta solo estaría disponible para usuarios de la web , no del admin');
});


/* Rutas del panel de administración */
Route::auth();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

	Route::get('/', 'HomeController@index');
	
	Route::get('/home', 'HomeController@index');

	Route::group(['middleware' => 'admin'], function(){
		Route::resource('users', 'UsersController');
		Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
			]);
	});

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
		]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
		]); 

	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
		]);

	Route::get('articles.listall/{page?}', [
		'uses' => 'ArticlesController@listAll',
		'as' => 'admin.articles.listall'
		]);

	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as' => 'admin.images.index'
		]);

});
