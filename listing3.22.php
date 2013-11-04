// app/views/page.blade.php
<!doctype html>								
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML test</title>
</head>
<body>
  <b>This text is bold!</b>
  <p>It is inside of a template</p>
</body>
</html>

// app/routes.php
Route::get('html', function()
{
  return View::make('page');
});
