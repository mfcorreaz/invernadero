<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categoria\CategoriaController;


Route::get('', [CategoriaController::class, 'index']);

