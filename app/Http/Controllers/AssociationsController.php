<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociationsController extends Controller
{
    public function index()
    {
        return view('associations.index');
    }

    public function create(){
        return view('associations.create');
    }

    public function show(){
        return view('associations.show');
    }
}
