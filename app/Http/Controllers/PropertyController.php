<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\Quater;
use App\Models\Township;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of property.
     * @var Request $request
     * @var Property $properties
     * @var Category $categories
     */
    public function index(Request $request)
    {

        $properties = Property::with(['user', 'quater', 'quater.township', 'category']);
        $categories = Category::all();
        $townships = Township::with('quaters')->get();

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

        if ($request->has('quater')) {
            $quaterRequest = $request->input('quater');
            $quater = Quater::where('name', $quaterRequest)->firstOrFail();
            $properties = $properties->where('quater_id', $quater->id);
        }

        $properties = $properties
            ->where("is_solded", true)
            ->paginate(6);

        return view("property.index", compact('properties', 'categories', 'townships'));
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
