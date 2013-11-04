Route::get('coffee', function()
{
  return Redirect::route('tea');
});

Route::get('this-is-tea', array('as' => 'tea', function()
{
  return 'I am the tea route';
}));
