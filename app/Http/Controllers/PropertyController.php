<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\Township;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $properties = Property::with(['user', 'quater', 'quater.township', 'category']);
        $categories = Category::all();

        if ($request->has('category')) {
            $categoryRequest = $request->input('category');
            $c = Category::where('name', $categoryRequest)->firstOrFail();

            $properties = $properties->where("category_id", $c->id);
        }

        if ($request->has('city')) {

            $townshipRequest = $request->input('city');
            $township = Township::with('quaters')->where("name", $townshipRequest)->firstOrFail();

            $quaterIds = $township->quaters->pluck('id')->toArray();
            $properties = $properties->whereIn('quater_id', $quaterIds);
        }

        $properties = $properties->get();

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
