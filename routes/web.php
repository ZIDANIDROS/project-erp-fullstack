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

Route::get('vendor/{id}/{makan}', function ($id, $makan) {
    return 'hai vendor ' . $id . ' makan ' . $makan;
})->whereNumber('id')->whereAlpha('makan');
#url = http://dashboard.test/vendor/{id}/{makan}

Route::get('vendor/{name?}/{yes}', function ($yes, $name = 'wkwk') {
    return 'hai ' . $name . ' yes ' . $yes;
});
#url = http://dashboard.test/vendor/{name} jika kosong maka akan menampilkan wkwk
#Tanda ? pada Laravel route tersebut berarti parameter {name} bersifat opsional (boleh ada, boleh tidak).
