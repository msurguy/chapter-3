Route::get('coffee/{kind}/{size?}', 
  array('before'=> 'checksize|auth',
  function($kind, $size = null)
  {
    return 'Kind of coffee drink: '.$kind.', size: '.$size;
  }
));
