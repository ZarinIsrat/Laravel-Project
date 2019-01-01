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

Route::get('/', function(){
	
	return redirect()->route('login.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');
Route::group(['middleware'=>['sess']], function(){
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/adduser/', 'HomeController@create')->name('home.create');
Route::post('/home/adduser/', 'HomeController@store');
Route::get('/home/userlist', 'HomeController@show')->name('home.show');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
Route::post('/home/edit/{id}','HomeController@update');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
Route::post('/home/delete/{id}', 'HomeController@destroy');
Route::get('/home/profile/{id}', 'HomeController@profile')->name('home.profile');
Route::post('/home/profile/{id}', 'HomeController@profilechange');
Route::get('/home/uploadfile', 'HomeController@uploadfile')->name('home.uloadfile');
Route::post('/home/uploadfile', 'HomeController@showUploadFile');
Route::get('/home/download', 'HomeController@downfunc')->name('home.download');
Route::get("my-search","HomeController@mySearch");

Route::get('/studenthome', 'StudentHomeController@index')->name('studenthome.index');
Route::get('/studenthome/profile/{id}', 'StudentHomeController@profile')->name('studenhome.profile');
Route::post('/studenthome/profile/{id}', 'StudentHomeController@profilechange');
Route::get('/studenthome/assignment/{id}', 'StudentHomeController@assignment')->name('studenhome.assignment');
Route::post('/studenthome/assignment/{id}', 'StudentHomeController@assignmentstore');
Route::get('/studenthome/exam/{id}', 'StudentHomeController@exam')->name('studenhome.exam');
Route::post('/studenthome/exam/{id}', 'StudentHomeController@examstore');
Route::get('/studenthome/todo/{id}', 'StudentHomeController@todo')->name('studenhome.todo');
Route::post('/studenthome/todo/{id}', 'StudentHomeController@todostore');
Route::get('/studenthome/study/{id}', 'StudentHomeController@study')->name('studenhome.study');
Route::get('/studenthome/delete/{id}', 'StudentHomeController@examdelete')->name('studenhome.examdelete');
Route::post('/studenthome/delete/{id}', 'StudentHomeController@examdestroy');
Route::get('/studenthome/assdelete/{id}', 'StudentHomeController@assignmentdelete')->name('studenhome.assignmentdelete');
Route::post('/studenthome/assdelete/{id}', 'StudentHomeController@assignmentdestroy');
Route::get('/studenthome/uploadassignment/{id}', 'StudentHomeController@assignmentuplod')->name('studenhome.assignmentdelete');
Route::post('/studenthome/uploadassignment/{id}', 'StudentHomeController@assignmentuploadstore');
Route::get('/studenthome/download/{id}', 'StudentHomeController@assignmentdownload')->name('studenhome.assdownload');

Route::get('/teacherhome', 'TeacherHomeController@index')->name('teacherhome.index');
Route::get('/teacherhome/profile/{id}', 'TeacherHomeController@profile')->name('teacherhome.profile');
Route::post('/teacherhome/profile/{id}', 'TeacherHomeController@profilechange');
Route::get('/teacherhome/notice/{id}', 'TeacherHomeController@notice')->name('teacherhome.notice');
Route::post('/teacherhome/notice/{id}', 'TeacherHomeController@noticestore');
Route::get('/teacherhome/delete/{id}', 'TeacherHomeController@noticedelete')->name('teacherhome.noticedelete');
Route::post('/teacherhome/delete/{id}', 'TeacherHomeController@noticedestroy');
Route::get('/teacherhome/uploadfile/{id}', 'TeacherHomeController@fileupload')->name('teacherhome.fileupload');
Route::post('/teacherhome/uploadfile/{id}', 'TeacherHomeController@fileuploadstore');
Route::get('/teacherhome/filedelete/{id}', 'TeacherHomeController@filedelete')->name('teacherhome.filedelete');
Route::post('/teacherhome/filedelete/{id}', 'TeacherHomeController@filedestroy');

Route::get('/logout', 'LogoutController@index')->name('logout.index');
});