<?php

use Illuminate\Support\Facades\Route;
use \Antonkc\Simple_greeting\SimpleGreetingController;

Route::get('/greet/{name?}', [SimpleGreetingController::class, 'index']);

