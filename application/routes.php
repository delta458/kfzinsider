<?php

Route::get('/','home@index');
Route::get('home',array('as' => 'home', 'uses' => 'home@index'));
//
//Route::get('home',array('as' => 'home', 'uses' => 'home@index'));

/*
 * Routes for user login,logout and registering
 */
Route::get('register', array('as' => 'register', 'uses' => 'usermanagement.user@register'));
Route::post('register', array('before' => 'csrf', 'uses' => 'usermanagement.user@registerAction'));

Route::get('login', array('as' => 'login', 'uses' => 'usermanagement.user@login'));
Route::post('login', array('before' => 'csrf', 'uses' => 'usermanagement.user@loginAction'));

Route::get('logout', array('as' => 'logout', 'uses' => 'usermanagement.user@logout'));

/*
 * Routes for admin-backend
 */

//Garages
Route::get('settings', array('as' => 'settings', 'uses' => 'backend.garage@settings'));
Route::get('garagesAll', array('uses' => 'backend.garage@allGarages'));

Route::get('garageCreate', array('uses' => 'backend.garage@garageCreate'));
Route::post('garageCreate', array('before' => 'csrf', 'uses' => 'backend.garage@garageCreateAction'));

Route::post('garageUpdateAction', array('uses' => 'backend.garage@garageUpdateAction'));
Route::post('garageUpdateOrDelete', array('uses' => 'backend.garage@garageUpdateOrDelete'));

//Categories
Route::get('categoriesAll', array('uses' => 'backend.category@allCategories'));
Route::get('categoryCreate', array('uses' => 'backend.category@categoryCreate'));
Route::post('categoryCreate', array('before' => 'csrf', 'uses' => 'backend.category@categoryCreateAction'));
Route::post('categoryUpdateAction', array('uses' => 'backend.category@categoryUpdateAction'));
Route::post('categoryUpdateOrDelete', array('uses' => 'backend.category@categoryUpdateOrDelete'));

//Services
Route::get('servicesAll', array('uses' => 'backend.service@allServices'));
Route::get('serviceCreate', array('uses' => 'backend.service@serviceCreate'));
Route::post('serviceCreate', array('before' => 'csrf', 'uses' => 'backend.service@serviceCreateAction'));
Route::post('serviceUpdateAction', array('uses' => 'backend.service@serviceUpdateAction'));
Route::post('serviceUpdateOrDelete', array('uses' => 'backend.service@serviceUpdateOrDelete'));

//Users
Route::get('usersAll',array('uses' => 'backend.user@allUsers' ));
Route::get('userCreate', array('uses' => 'backend.user@userCreate'));
Route::post('userCreate', array('uses' => 'backend.user@userCreateAction'));

Route::post('userUpdateAction', array('uses' => 'backend.user@userUpdateAction'));
Route::post('userUpdateOrDelete', array('uses' => 'backend.user@userUpdateOrDelete'));

HTML::macro('clever_link', function($route, $text) {
            $class = '';
            $action = Request::route();
            $action = $action->action;

            if (isset($action['as'])) {
                $class = $action['as'] == $route ? ' class="active"' : '';
            }

            return '<li' . $class . '>' . HTML::link_to_route($route, $text) . '</li>';
        });

Event::listen('404', function() {
            return Response::error('404');
        });

Event::listen('500', function() {
            return Response::error('500');
        });

Route::filter('before', function() {
            View::share('isAdmin',(Auth::check() && Auth::user()->isadmin) ? true : false);
        });

Route::filter('after', function($response) {
            // Do stuff after every request to your application...
        });

Route::filter('csrf', function() {
            if (Request::forged())
                return Response::error('500');
        });

Route::filter('auth', function() {
            if (Auth::guest())
                return Redirect::to('login');
        });