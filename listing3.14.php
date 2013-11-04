Route::get('coffee/{kind}/{size?}', array('before'=>'checksize',
  function($kind, $size = null)
  {
   return 'Kind of coffee drink: '.$kind.', size: '.$size;
  }
));
