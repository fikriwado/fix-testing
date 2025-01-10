<?php

use Fixwad\Testing\Service\BlogService;
use Iam\View\Service\HomeService;
use Illuminate\Support\Facades\Route;

Route::get('iam', function () {
    return 'Hello from the iam package';
});

Route::get('fixwad', function () {
    // return BlogService::all();
    return HomeService::all();
});

Route::get('pertestingan', function () {
    // return BlogService::all();
    return BlogService::all();
});
