<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::where("is_solded",true)->get()->take(6);
        $categories = Category::all();
        return view("home", compact('properties', 'categories'));
    }
}
