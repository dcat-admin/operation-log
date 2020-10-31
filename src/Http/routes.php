<?php

use Dcat\Admin\OperationLog\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('auth/operation-logs', Controllers\OperationLogController::class.'@index')->name('dcat-admin.operation-log.index');
Route::delete('auth/operation-logs/{id}', Controllers\OperationLogController::class.'@destroy')->name('dcat-admin.operation-log.destroy');