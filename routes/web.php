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

Route::get('/', 'GuestController@home_page');
Route::group([], function () {
    Route::get('forget_password', 'ResetPasswordController@forget_password_form');
    Route::post('forget_password', 'ResetPasswordController@forget_password');
    Route::get('reset_forget_password', 'ResetPasswordController@reset_forget_password_form');
    Route::post('reset_forget_password', 'ResetPasswordController@reset_forget_password');
    Route::get('/student','GuestController@students');
    Route::post('/student','GuestController@student');
    Route::get('/laboratory','GuestController@laboratory');
    Route::get('/research_head/{research_head}/sub_researches','GuestController@sub_research_heads');
    Route::get('/lesson','GuestController@lessons');
    Route::get('/publication','GuestController@publication');
    Route::get('/research','GuestController@research_form');
    Route::get('/student_researches','GuestController@student_researches');
    Route::get('/add_student_research','GuestController@add_student_research_form');
    Route::post('/add_student_research','GuestController@add_student_research');
    Route::get('student/{student}/researches','GuestController@researches');

});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/','AdminController@manage_form');
    Route::get('/home','AdminController@home_form');
    Route::post('/home','AdminController@home');
    Route::get('/research_head','AdminController@research_head');
    Route::get('/students','AdminController@students');
    Route::get('/publications','AdminController@publications');
    Route::get('/add_publication','AdminController@add_publication_form');
    Route::post('/add_publication','AdminController@add_publication');
    Route::get('publications/{publication}/delete', 'AdminController@delete_publication');
    Route::get('publication/{publication}', 'AdminController@edit_publication');
    Route::post('publication/{publication}', 'AdminController@update_publication');
    Route::get('/lessons','AdminController@lessons');
    Route::get('/add_lesson','AdminController@add_lesson_form');
    Route::post('/add_lesson','AdminController@add_lesson');
    Route::get('lesson/{lesson}/delete', 'AdminController@delete_lesson');
    Route::get('lesson/{lesson}', 'AdminController@edit_lesson');
    Route::post('lesson/{lesson}', 'AdminController@update_lesson');
    Route::get('/laboratories','AdminController@laboratories');
    Route::get('/add_laboratory','AdminController@add_laboratory_form');
    Route::post('/add_laboratory','AdminController@add_laboratory');
    Route::get('laboratory/{laboratory}/delete', 'AdminController@delete_laboratory');
    Route::get('laboratory/{laboratory}', 'AdminController@edit_laboratory');
    Route::post('laboratory/{laboratory}', 'AdminController@update_laboratory');
    Route::get('student/{student}/verify','AdminController@student_verify');
    Route::get('/research_heads','AdminController@research_heads');
    Route::get('/add_research_head','AdminController@add_research_head_form');
    Route::post('/add_research_head','AdminController@add_research_head');
    Route::get('research_head/{research_head}/delete', 'AdminController@delete_research_head');
    Route::get('research_head/{research_head}', 'AdminController@edit_research_head');
    Route::post('research_head/{research_head}', 'AdminController@update_research_head');
    Route::get('research_head/{research_head}/sub_research_heads','AdminController@sub_research_heads');
    Route::get('research_head/{research_head}/add_sub_research','AdminController@add_sub_research_head_form');
    Route::post('research_head/{research_head}/add_sub_research','AdminController@add_sub_research_head');
    Route::get('sub_research_head/{sub_research_head}/delete', 'AdminController@delete_sub_research_head');
    Route::get('sub_research_head/{sub_research_head}', 'AdminController@edit_sub_research_head');
    Route::post('sub_research_head/{sub_research_head}', 'AdminController@update_sub_research_head');
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
