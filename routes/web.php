<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

$auth_session = config('jetstream.auth_session');
$authenticated = ['auth:sanctum', $auth_session];

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::middleware($authenticated)->group(function () {
    Route::resource('members', MemberController::class);
});

Route::resource('events', EventController::class)
    ->middleware($authenticated)
    ->except(['index', 'show']);

Route::resource('announcements', AnnouncementController::class)
    ->middleware($authenticated)
    ->except(['index', 'show']);

Route::resource('photos', PhotoController::class)
    ->middleware($authenticated)
    ->except(['index', 'show']);
