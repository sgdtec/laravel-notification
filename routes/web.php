<?php

Broadcast::routes();

use App\Http\Controllers\NotificationController;


Route::resource('posts', 'Posts\PostsController');
Route::post('comment', 'Posts\CommentController@store')->name('comment.store');

Route::get('notifications', [NotificationController::class, 'notifications'])->name('notifications');
Route::put('notification-read', [NotificationController::class, 'markAsRead']);
Route::put('notification-all-read', [NotificationController::class, 'markAllAsRead']);

Route::get('/', function () {
    return view('welcome');
});

/**
*Auth Routes
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
