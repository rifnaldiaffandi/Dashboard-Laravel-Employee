<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyStructureController extends Controller
{
    public function structure()
{
    return view('layouts.structure');
}
}
