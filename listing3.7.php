Route::get('coffee/{kind}', function($kind)
{
  return 'Requested kind of coffee drink: '.$kind;
});
