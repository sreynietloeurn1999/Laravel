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


////// Point ONE : Homework2

Route::get('/', function () {
    return view('welcome');
});

Route::get('/action', function () {
    return view('pages.action');
}) ->name ('action');

Route::get('/about', function () {
    return view('pages.about');
})->name ('about');

Route::get('/news', function () {
    return view('pages.news');
})-> name('news');

Route::get('/join', function () {
    return view('pages.join');
})->name ('join');

Route::get('/contact', function () {
    return view('pages.contact');
})->name ('contact');


/////// Point TWO : Homework2


Route::get('teacher/{index}',function($index){
    $teacher = array('Channak','Ronan','Seiha','Rady','Rith');
    $countTeacher= count($teacher);
    if($index < $countTeacher) {
        echo "The teacher is: ".$teacher[$index];
    }else{
        $countIndex = $countTeacher-1;
        echo "The array is: ";
        for($in =0; $in <= $countIndex;$in ++) {
            if($in < $countIndex) {
                echo "[$in]$teacher[$in],";
            }else if($in == $countIndex) {
                echo "[$in]$teacher[$in]";
            }
        }
        echo "<br>";
        echo "No teacher with this index:". $index;
        echo "<br>";
        echo "The largest index is:" .$countIndex;
    }

    


});