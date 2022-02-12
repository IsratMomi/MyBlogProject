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
Route::get('/',[
   'uses' => 'App\Http\Controllers\Front\FrontController@index',
   'as' => '/'
]);
Route::get('/blog-single/{id}',[
    'uses' => 'App\Http\Controllers\Front\FrontController@singleBlog',
    'as' => 'blog-single'
]);
Route::get('/category-blogs/{id}',[
    'uses' => 'App\Http\Controllers\Front\FrontController@categoryBlog',
    'as' => 'category-blogs'
]);
Route::post('/new-comment',[
    'uses' => 'App\Http\Controllers\Front\CommentController@newComment',
    'as' => 'new-comment'
]);

Route::get('/contact',[
    'uses' => 'App\Http\Controllers\Front\ContactController@index',
    'as' => 'contact'
]);
Route::post('/new-message',[
    'uses' => 'App\Http\Controllers\Front\ContactController@newContact',
    'as' => 'new-message'
]);

Route::get('/dashboard',[
    'uses' => 'App\Http\Controllers\Admin\DashboardController@index',
    'as' => 'dashboard',
    'middleware' => ['auth:sanctum','verified']
]);
Route::group(['middleware' =>['auth:sanctum','verified']], function(){
//    readers message routes

    Route::get('all-messages',[
        'uses' =>'App\Http\Controllers\Front\ContactController@allMessages',
        'as' => 'all-messages'
    ]);
    Route::get('/get-message-info',[
        'uses' =>'App\Http\Controllers\Front\ContactController@messageInfo',
        'as' => 'get-message-info'
    ]);
    Route::get('/delete-message/{id}',[
        'uses' =>'App\Http\Controllers\Front\ContactController@messageDelete',
        'as' => 'delete-message'
    ]);

//    category routes

    Route::get('/add-category',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@addCategory',
        'as' => 'add-category'
    ]);
    Route::post('/new-category',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@newCategory',
        'as' => 'new-category'
    ]);
    Route::get('/manage-category',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@manageCategory',
        'as' => 'manage-category'
    ]);
    Route::get('/edit-category/{id}',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@editCategory',
        'as' => 'edit-category'
    ]);
    Route::post('/update-category',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@updateCategory',
        'as' => 'update-category'
    ]);
    Route::get('/delete-category/{id}',[
        'uses' =>'App\Http\Controllers\Admin\CategoryController@deleteCategory',
        'as' => 'delete-category'
    ]);

//    blog routes
   Route::get('/add-blog',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@addBlog',
        'as' => 'add-blog'
    ]);
    Route::post('/new-blog',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@newBlog',
        'as' => 'new-blog'
    ]);
    Route::get('/manage-blog',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@manageBlog',
        'as' => 'manage-blog'
    ]);
    Route::get('/edit-blog/{id}',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@editBlog',
        'as' => 'edit-blog'
    ]);
    Route::post('/update-blog',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@updateBlog',
        'as' => 'update-blog'
    ]);
    Route::get('/delete-blog/{id}',[
        'uses' =>'App\Http\Controllers\Admin\BlogController@deleteBlog',
        'as' => 'delete-blog'
    ]);
});


