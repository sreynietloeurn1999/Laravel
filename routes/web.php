<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('student', 'StudentsController@showStudent'); 
// Route::get('student/{name}', 'StudentsController@searchStudent'); 

// Route::get('subject', 'SubjectsController@showSubject')->name('subject'); 
// Route::get('data', 'StuController@getStudentData'); 

// Route::get('showForm', 'StuController@showFormStudent'); 
// Route::post('insertData', 'StuController@addStudent'); 
// Route::get('updateform/{id}','StuController@showEditForm')->name('editfrome'); 
// Route::put('edit/{id}','StuController@update')->name('update'); 
// Route::get('delete/{id}','StuController@delete')->name('delete');
   


// Route::resource('student','ResourceStudController');
// Route::resource('comment','CommentController');

// Route::resource('chicken','ChickenController');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/addprofile', 'UserController@getEmail')->name('home');
// Route::get('/getAll', 'UserController@getAll')->name('home');
// Route::get('/createPost', 'UserController@createPost')->name('createPost');
// Route::get('/addPost', 'UserController@addPost')->name('addPost');
// Route::get('/getPost', 'UserController@getAllPost')->name('home');



Route::get('/getPost', 'UserController@getAllPost')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profiles', 'UserController@getAllUserWithProfile')->name('getAllUsers');
Route::get('showEdit/{id}', 'UserController@formEdit')->name('editForm');
Route::PUT('update/{id}', 'UserController@update')->name('update');
Route::get('delete/{id}', 'UserController@delete')->name('delete');



Route::get('addFormPost','UserController@formAddPost')->name('addformpost');

Route::post('addPost','UserController@addPost')->name('addPost');


Route::get('viewPost','UserController@viewPost')->name('viewPost');

Route::get('editFormPost/{id}','UserController@editFormPost')->name('formPostEdit');

Route::PUT('updatePost/{id}', 'UserController@updatePost')->name('updatePost');

Route::get('delete/{id}', 'UserController@deletePost')->name('deletePost');