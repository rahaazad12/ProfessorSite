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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::group([], function () {
    Route::get('forget_password', 'ResetPasswordController@forget_password_form');
    Route::post('forget_password', 'ResetPasswordController@forget_password');
    Route::get('reset_forget_password', 'ResetPasswordController@reset_forget_password_form');
    Route::post('reset_forget_password', 'ResetPasswordController@reset_forget_password');
    Route::get('/student','controller@student_form');
    Route::post('/student','controller@student');
    Route::get('/laboratory','controller@laboratory_form');
    Route::get('/lesson','controller@lesson');
    Route::get('/publication','controller@publication');
    Route::get('/research','controller@research_form');
    Route::get('/student_research','controller@student_research');
    Route::get('/add_student_research','controller@add_student_research_form');
    Route::post('/add_student_research','controller@add_student_research_form');

});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/','controller@manage_form');
    Route::get('/home','controller@home');
    Route::get('/research_head','controller@research_head');
    Route::get('/students','controller@students');
    Route::get('/publications','controller@publications');
    Route::get('/add_publication','controller@add_publication_form');
    Route::post('/add_publication','controller@add_publication');
    Route::get('publications/{publication}/delete', 'Controller@delete_publication');
    Route::get('publication/{publication}', 'Controller@edit_publication');
    Route::post('publication/{publication}', 'Controller@update_publication');
    Route::get('/lessons','controller@lessons');
    Route::get('/add_lesson','controller@add_lesson_form');
    Route::post('/add_lesson','controller@add_lesson');
    Route::get('lesson/{lesson}/delete', 'Controller@delete_lesson');
    Route::get('lesson/{lesson}', 'Controller@edit_lesson');
    Route::post('lesson/{lesson}', 'Controller@update_lesson');
    Route::get('/laboratories','controller@laboratories_form');
    Route::get('/add_laboratory','controller@add_laboratory_form');
    Route::post('/add_laboratory','controller@add_laboratory');
    Route::get('laboratory/{laboratory}/delete', 'Controller@delete_laboratory');
    Route::get('laboratory/{laboratory}', 'Controller@edit_laboratory');
    Route::post('laboratory/{laboratory}', 'Controller@update_laboratory');
});
// Registration Routeرياs...
//Route::group([], function () {
//    $this->get('Register_student', 'RegisterController@showRegistrationFormStudent');
//    $this->post('Register_student', 'RegisterController@registerStudent');
//   });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
