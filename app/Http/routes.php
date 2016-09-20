<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=> ['web']],function(){
    //authenthication
    Route::get('auth/login', ['as' => 'login','uses' => 'Auth\AuthController@getLogin']);
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', ['as' => 'logout','uses' => 'Auth\AuthController@getLogout']);

    //registration
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
            ->where('slug', '[\w\d\-\_]+');

    //comments
    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as'=>'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as'=>'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as'=>'comments.update']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as'=>'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as'=>'comments.delete']);

    //contact
    Route::post('contacts', ['uses' => 'ContactsController@store', 'as'=>'contacts.store']);


    //pages
    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
    Route::resource('posts', 'PostController');
});
