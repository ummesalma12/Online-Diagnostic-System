<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', 'pagesController@Home' );
Route::get('/services', 'pagesController@Services' );
Route::get('/shopTestDetail', 'pagesController@TestDetails' );
Route::get('/reportCollection', 'pagesController@ReportCollection' );
Route::get('/contact', 'pagesController@Contact' );
Route::get('/feedback', 'pagesController@Feedback' );
Route::get('/aboutUs', 'pagesController@AboutUs' );
Route::get('/employeeRegister', 'pagesController@Employee');
/* Route::get('/empdashboard','pagesController@empDashboard')->name('empdashboard'); */



Route::get('/invoicesuser/{id}', 'pagesController@Invoice')->name('invoicesuser');

Route::get('/diagnosisShop', 'pagesController@DiagnosisShop' )/* ->name('Services') */;
Route::get('/cart', 'pagesController@cart')->name('cart');
Route::get('/add-to-cart/{services}', 'pagesController@addToCart')->name('add-cart');
Route::get('/remove/{id}', 'pagesController@removeFromCart')->name('remove');
Route::get('/pay','pagesController@pay')->name('pay');
Route::get('/confirmorder','pagesController@confirmOrder')->name('confirmorder');

Route::get('/reports','pagesController@Report')->name('reports');


Route::resource('service','ServicesController');
Route::resource('product','ProductController'); 
Route::resource('invoice','InvoiceController');
Route::resource('newsletter','NewsLetterController');
Route::resource('contactt','ContactController');
Route::resource('feedbackk','FeedbackController');
Route::resource('report','ReportController');

 
 Route::group([ 'middleware' => ['auth']], function () {
    Route::get('/empdashboard','pagesController@empDashboard')->name('empdashboard');
}); 

 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
