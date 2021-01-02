<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  //  Route::get(' /home', 'HomeController@index');

Auth::routes();
Route::get(' /admin', 'HomeController@index');

Route::prefix('admin')
    ->group(function () {
// Route::get('/home', 'HomeController@index') ;
//about
Route::resource('/about', 'AboutUsController') ;
Route::get('/about/edit/{id}', 'AboutUsController@edit');
Route::post('/about/update/{id}', 'AboutUsController@update') ;
//services
Route::resource('/services', 'ServicesController') ;
//features
Route::resource('/features', 'FeaturesController');
Route::get('/features/edit/{id}', 'FeaturesController@edit');
//slider
Route::resource('/slider', 'SliderController') ;
//team
Route::resource('/team', 'TeamController') ;
Route::get('/team/edit/{id}', 'TeamController@edit');
Route::post('/team/update/{id}', 'TeamController@update') ;
Route::get('/team/destroy/{id}', 'TeamController@destroy') ;
//package
Route::resource('/packages', 'PackageController') ;
//testimonials
Route::resource('/testimonials', 'TestimonialsController') ;
Route::get('/testimonials/edit/{id}', 'TestimonialsController@edit');
Route::get('/testimonials/destroy/{id}', 'TestimonialsController@destroy') ;
//blog
Route::resource('/blogs', 'BlogController') ;
Route::get('/blogs/edit/{id}', 'BlogController@edit');
Route::get('/blogs/destroy/{id}', 'BlogController@destroy') ;
//request
Route::resource('/requests','RequestController');
//number
Route::resource('/counter', 'NumbersController') ;
Route::get('/counter/edit/{id}', 'NumbersController@edit');
Route::post('/counter/update/{id}', 'NumbersController@update') ;
//category
Route::resource('/category', 'CategoryController');
//projects
Route::resource('/projects','ProjectController');
Route::get('/projects/edit/{id}','ProjectController@edit');
Route::post('/projects/update/{id}','ProjectController@update');
Route::get('/projects/details/{id}','ProjectController@details');
//images
Route::resource('/img', 'ImagesController');
Route::post('/img_store', 'ImagesController@image_store')->name('img_store');
Route::get('/img/view/{id}','ImagesController@show');
//video
Route::resource('video','VideoController');
    });

/////////////////////////////////////////////////////////////////////////////////////////////////////
//master page
Route::get('/index','MasterController@index');
Route::get('/about','MasterController@about');
Route::get('/services','MasterController@services');
Route::get('/portfolio ','MasterController@portfolio');
Route::get('/team','MasterController@team');
Route::get('/blog','MasterController@blog');
Route::get('/contact','MasterController@contactUs');







