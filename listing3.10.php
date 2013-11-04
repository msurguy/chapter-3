Route::get('coffee/{kind}/{size?}', function($kind, $size = null)
{
  return 'Kind of coffee drink: '.$kind.', size: '.$size;
});
