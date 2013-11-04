Route::get('coffee', array('before' => 'auth', function()
{
  return View::make('hello');
}));
