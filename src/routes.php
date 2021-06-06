<?php

Route::get('priapi/{path?}', [Ktran\Priapi\Controllers\PriapiController::class, 'index'])->where('path', '.*');
Route::get('apiman/requests', [Ktran\Priapi\Controllers\PriapiController::class, 'getRequest']);
Route::post('apiman/requests', [Ktran\Priapi\Controllers\PriapiController::class, 'addRequest']);
Route::put('apiman/requests', [Ktran\Priapi\Controllers\PriapiController::class, 'updateRequest']);
Route::delete('apiman/requests', [Ktran\Priapi\Controllers\PriapiController::class, 'deleteRequest']);

Route::any('apiman/test', [Ktran\Priapi\Controllers\PriapiController::class, 'test']);
