<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hai wkwk';
});

Route::prefix('/hai')->group(function () {
    Route::get('/makan', function () {
        return 'hai makan';
    });
    Route::get('/minum', function () {
        return 'hai minum';
    });
});

Route::get('vendor/{id}', function ($id) {
    return 'hai vendor ' . $id;
});
