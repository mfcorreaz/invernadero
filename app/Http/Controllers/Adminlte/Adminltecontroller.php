<?php

namespace App\Http\Controllers\Adminlte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Adminltecontroller extends Controller
{
    public function index()
    {
       return view('adminlte.index'); 
    }
}
