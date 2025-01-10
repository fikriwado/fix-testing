<?php

use Fixwad\Testing\Service\BlogService;
use Illuminate\Support\Facades\Route;

Route::get('iam', function () {
    return 'Hello from the iam package';
});

Route::get('fixwad', function () {
    return BlogService::all();
});
