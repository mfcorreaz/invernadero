<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adminlte\adminltecontroller;

Route::get('', [adminltecontroller::class, 'index' ]);