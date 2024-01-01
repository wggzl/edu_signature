<?php
use \Illuminate\Support\Facades\Route;
Route::get('edu/index', [\Edu\Signature\Controller\IndexController::class, 'index']);
