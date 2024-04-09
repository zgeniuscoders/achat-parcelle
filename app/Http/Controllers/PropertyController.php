<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $properties = [];
        $categories = Category::all();

        if ($request->has('category')) {
            $categoryRequest = $request->input('category');
            $c = Category::where('name', $categoryRequest)->firstOrFail();

            $properties = Property::where("category_id", $c->id)->get();
        } else {
            $properties = Property::with(['user', 'quater', 'quater.township'])->get();
        }

        return view("property.index", compact('properties', 'categories'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property = Property::findOrFail($id);
        return view("property.show", compact('property'));
    }
}
