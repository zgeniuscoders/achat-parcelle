<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $properties = Property::all();
        return view("home", compact('properties'));
    }
}
