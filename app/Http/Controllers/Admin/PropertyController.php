<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quater;
use App\Models\Category;
use App\Models\Property;
use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $townships = Township::with('quaters')->get();
        $categories = Category::all();

        return view('admin.property.create', compact('townships', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $details = $request->details;
        $heigth = $request->height;
        $status = $request->status;
        $width = $request->width;
        $image = $request->file('image');
        $images = $request->files('images');
        $price = $request->price;

        Property::create([
            'name' => $name,
            'details' => $details,
            'heigth' => $heigth,
            'width' => $width,
            'iamge' => $image,
            'price' => $price,
            'status' => $status,
            'iamges' => $images
        ]);

        return redirect()->back()->with('success', 'votre property a ete poster avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
