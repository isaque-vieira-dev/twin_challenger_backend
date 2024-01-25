<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'tasks' => TaskController::class,
]);