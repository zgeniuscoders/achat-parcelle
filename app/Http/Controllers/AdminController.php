<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $properties = Property::with(['quater', 'quater.township'])->get();
        return view("admin.index", compact('properties'));
    }
}
