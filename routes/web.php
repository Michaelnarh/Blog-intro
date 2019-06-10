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
/**
 * route of the various pages.
 */
Route::get('/','PagesController@Homepage');

Route::get('/about','PagesController@Aboutpage')->name('mainPages.about');

Route::get('/blog','PagesController@Blogpage')->name('mainPages.blog');

Route::get('/blog/{blog}','PagesController@Blogdetailpage')->name('mainPages.blog-detail');

Route::get('/contact','PagesController@Contactpage')->name('mainPages.contact');

Route::get('/share','PagesController@Sharepage')->name('mainPages.share');

Route::get('/support','PagesController@Supportpage')->name('mainPages.support');

Route::get("/store","BlogController@store");


Route::get("/test","PagesController@Testpage")->name('mainPages.test');



/***
 * ================= Route for admin view ===================
 */

Route::group(['prefix' => 'admin'], function () {
    
    Route::get("/blogs/search","SearchController@Search")->name("blogs.search");
    Route::resource('blogs', 'BlogController');
     
});

/**
 * ==================end of route for admin ==================
 */