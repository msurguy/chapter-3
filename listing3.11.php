<?php

App::before(function($request) {});
App::after(function($request, $response) {});

Route::filter('auth', function()
{
  if (Auth::guest()) return Redirect::guest('login');
});

Route::filter('auth.basic', function()
{
  return Auth::basic();
});

Route::filter('guest', function()
{
  if (Auth::check()) return Redirect::to('/');
});

Route::filter('csrf', function()
{
  if (Session::token() != Input::get('_token'))
  {
	throw new Illuminate\Session\TokenMismatchException;
  }
});
