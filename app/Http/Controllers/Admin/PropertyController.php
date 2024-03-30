<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quater;
use App\Models\Category;
use App\Models\Property;
use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;

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
    public function store(PropertyRequest $request)
    {

        $imagePaths = [];

        $name = $request->name;
        $details = $request->details;
        $heigth = $request->height;
        $status = $request->status;
        $width = $request->width;
        $quater_id = $request->quater_id;

        $price = $request->price;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imagePath = $image->store('property/images', 'public'); // Ou tout autre emplacement de stockage souhaité

        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('property/images', 'public'); // Ou tout autre emplacement de stockage souhaité
                $imagePaths[] = $path;
            }
        }

        Property::create([
            'name' => $name,
            'quater_id' => $quater_id,
            'details' => $details,
            'height' => $heigth,
            'width' => $width,
            'image' => $imagePath,
            'price' => $price,
            'status' => 1,
            'images' => json_encode($imagePaths)
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
