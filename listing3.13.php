Route::filter('csrf', function(){ ... });
... 
Route::filter('checksize', function()
{
  $size = Request::segment(3);
  if($size < 12 || $size > 24)		
  {
    return 'Size is not in the allowed range of 12 - 24';
  }
});
