Route::group(array('prefix' => 'admin'), function()
{
    Route::get('users', function(){ ... });
    Route::get('posts', function(){ ... });
    Route::get('comments', function(){ ... });
});
