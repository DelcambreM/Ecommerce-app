<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

class AdminController extends Controller
{
    public function admin (){
        return view('admin');
    }
}
