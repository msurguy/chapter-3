Route::get('coffee/{kind}/{size}', function($kind, $size)
{
  return 'Kind of coffee drink: '.$kind.', size: '.$size.'oz';
})->where('size', '[0-9]+'); 
