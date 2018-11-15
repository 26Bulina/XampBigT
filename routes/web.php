<?php




Route::get('/acasa', 'HomeController@index');
// Route::post('/insert', 'HomeController@insert');
Route::post('/inregistrare','InregistrareController@inregistrare');

// Route::get('/create', function () {
//     return view('create');
// });
// Route::post('/create','PostsController@create');

// Route::resource('posts','PostsController');
Route::resource('ideas','PostsController');
Route::resource('echipamente','EchipamenteController');
// Route::resource('adaugare','EchipamenteController@adaugare');

Route::get(' ', function () {
    return view('layouts.basic');
});

Route::get('tab', function () {
    return view('tab');
});

Route::get('userss', function () {
    return view('userss');
});

Route::get('functii', function () {
    return view('functii');
});

Route::get('qa', function () {
    return view('qa');
});

Route::get('login', function () {
    return view('auth/login');
});



Route::get('app', function () {
    return view('larav.app');
});

Route::get('home', function () {
    return view('larav.home');
});

Route::get('logareLaravel', 'HomeController@logareLaravel')->name('logare'); 




Route::get('/testx', 'HomeController@testx')->name('testx');
Route::post('/signupx', 'HomeController@signupx')->name('signupx');
Route::get('/alina', 'TestController@testx')->name('alina');




 //////////////////////////////////// old routes /////////////////////////////////////////////


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();







////////////////////////////////// exercises ///////////////////////////////////////////

Route::get('test', function () {
    echo 'Ai accesat pagina "/test".';
    print "<br>";
    echo 'Acceseaza "/test/23" pentru a folosi o variabila.';
});

Route::get('/test/{varsta}', function ($varsta) {
    echo "Ai cumva $varsta de ani ?";
});




//       POST,  GET, PUT,   DELETE 
// CRUD- CREATE READ UPDATE DELETE

Route::get('contact',function() {
echo 'Completeaza formularul!';
echo "
<form method='POST' action='contact'>
<input type=hidden name='_token' value='".csrf_token()."'>
<input type=hidden name='_method' value='POST'> <!-- GET,post,put,delete -->
<input type='submit'>
</form>
     ";
});
Route::post('contact',function() {
echo 'Formularul a fost trimis!';
});
Route::put('contact',function() {
echo 'Formular trimis! acesta este PUT';
});
Route::delete('contact',function() {
echo 'acesta este delete';
});

Route::resource('glasses', 'GlassController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'userController');

Route::resource('employees', 'EmployeeController');