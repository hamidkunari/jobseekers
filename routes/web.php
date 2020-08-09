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
//jobs
Route::get('/','JobController@index');
Route::get('/jobs/{id}/{job}','JobController@show')->name('jobs.show');
Route::get('/jobs/create','JobController@create')->name('job.create');
Route::post('/jobs/create','JobController@store')->name('job.store');
Route::get('/applications/{id}','JobController@apply')->name('apply');
Route::get('/jobs/{id}/edit','JobController@edit')->name('job.edit');
Route::get('/jobs/my-job','JobController@myjob')->name('my.job');
Route::get('/jobs/applications','JobController@applicant')->name('applicant');
Route::get('/jobs/alljobs','JobController@allJobs')->name('alljobs');


//company
Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index');
Route::get('company/create','CompanyController@create')->name('company.view');
Route::post('company/create','CompanyController@store')->name('company.store');
Route::post('company/coverphoto','CompanyController@coverPhoto')->name('cover.photo');

Route::post('company/logo','CompanyController@companyLogo')->name('company.logo');





//Profile 
Route::get('user/profile','UserProfileController@index')->name('user.profile');
Route::get('user/profile/create','UserProfileController@store')->name('profile.create');
Route::post('user/coverletter','UserProfileController@coverletter')->name('cover.letter');
Route::post('user/resume','UserProfileController@resume')->name('resume');
Route::post('user/avatar','UserProfileController@avatar')->name('avatar');
//employer view
Route::view('employer/register','auth.employer-register')->name('employer.register');
Route::post('employer/register','EmployerRegisterController@employerRegister')->name('emp.register');

//Category
Route::get('/category/{id}','CategoryController@index')->name('category.index');

//company
Route::get('/companies','CompanyController@company')->name('company');


//email
Route::get('/job/mail','EmailController@send')->name('mail');


//admin
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/dashboard/create','DashboardController@create');
Route::post('/dashboard/create','DashboardController@store')->name('post.store');
Route::post('/dashboard/destroy','DashboardController@destroy')->name('post.delete');

Route::get('/dashboard/{id}/edit','DashboardController@edit')->name('post.edit');
Route::post('/dashboard/{id}/update','DashboardController@update')->name('post.update');

Route::get('/dashboard/trash','DashboardController@trash');

Route::get('/dashboard/{id}/trash','DashboardController@restore')->name('post.restore');

Route::get('/dashboard/{id}/toggle','DashboardController@toggle')->name('post.toggle');
Route::get('/posts/{id}/{slug}','DashboardController@show')->name('post.show');

Route::get('/dashboard/jobs','DashboardController@getAllJobs')->middleware('admin');
Route::get('/dashboard/{id}/jobs','DashboardController@changeJobStatus')->name('job.status');


//testimonial
Route::get('testimonial','TestimonialController@index')->name('testimonial');

Route::get('testimonial/create','TestimonialController@create');
Route::post('testimonial/create','TestimonialController@store')->name('testimonial.store');




Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


