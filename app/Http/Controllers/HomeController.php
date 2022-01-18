<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Sample()
    {
        return Inertia::render('create');
    }
    public function insertdata()
    {
        return Inertia::render('insertdata');
    }
    public function updatedata()
    {
        return Inertia::render('updatedata');
    }
    public function view()
    {
        return Inertia::render('view');
    }
    public function newview()
    {
        return Inertia::render('newview');
    }
    public function nets()
    {
        return Inertia::render('nets');
    }
    public function real()
    {
        return Inertia::render('userview');
    }
}
