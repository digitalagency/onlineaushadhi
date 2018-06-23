<?php
use Illuminate\Http\Request;
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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/products', 'PagesController@product');
Route::get('/services', 'PagesController@service');
Route::get('/terms', 'PagesController@terms');
Route::get('/faq', 'PagesController@faq');
Route::get('/return', 'PagesController@returnPolicies');
Route::get('/first-aid-kit', 'PagesController@firstAidKit');
Route::get('/diabetes-care', 'PagesController@diabetesCare');
Route::get('/medical-devices', 'PagesController@medicalDevices');
Route::get('/health-surgical-instruments', 'PagesController@firstAidKit');
Route::get('/upload-prescription', 'PagesController@uploadPrescription');
Route::get('/sitemap.xml', 'SitemapController@index');

Route::get('/products/autocompleteSearch', 'ProductController@autocompleteSearch');
Route::get('/products/search', 'ProductController@search');
Route::get('/products/{product}', 'ProductController@showBySlug');


Route::post('/contact', 'ContactController@store');
Route::post('/upload-prescription', 'UploadController@upload')->name('prescriptions');
Route::get('/prescriptions/save', 'UploadController@store')->name('prescriptions.save');
Route::delete('/prescriptions', 'UploadController@destroy');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{id}', 'CartController@update');
Route::delete('/cart/{id}', 'CartController@destroy');

Route::delete('/emptyCart', 'CartController@emptyCart');
Route::get('/checkout', 'PagesController@checkout');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/sales/{sale}', 'HomeController@show')->name('sales.order');
    Route::get('/order', 'OrderController@store')->name('order');

    Route::post('/profile/edit', 'UserController@update');
    Route::get('/profile/edit', 'UserController@edit');

    Route::delete('/prescriptions/{id}', 'UploadController@destroy');

    
    Route::get('/order-complete', 'PagesController@thanks')->name('pages.thanks');
    Route::get('/prescription-order-complete', 'PagesController@prescriptionThanks')->name('pages.prescriptionsThanks');
});
