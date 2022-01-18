<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveContrller extends Controller
{
    //
    public function save_stu(){
        return Inertia::render('create');
    }
}
