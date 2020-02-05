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

Route::get('student', 'StudentsController@showStudent'); 
Route::get('student/{name}', 'StudentsController@searchStudent'); 

Route::get('subject', 'SubjectsController@showSubject')->name('subject'); 
Route::get('data', 'StuController@getStudentData'); 

Route::get('showForm', 'StuController@showFormStudent'); 
Route::post('insertData', 'StuController@addStudent'); 
Route::get('updateform','StuController@showEditForm')->name('editfrome'); 
Route::put('edit/{id}','StuController@update')->name('update'); 
Route::get('delete/{id}','StuController@delete')->name('delete');
   

