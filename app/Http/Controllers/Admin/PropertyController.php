<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quater;
use App\Models\Category;
use App\Models\Property;
use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::user()->cannot('create', Property::class)) {
            abort(403, "vous ne disposer pas acces de droit pour publier un bien");
        }

        $imagePaths = [];
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

        Property::create(
            array_merge(
                $request->all(),
                [
                    'user_id' => auth()->user()->id,
                    'image' => $imagePath,
                    'status' => 1,
                    'images' => json_encode($imagePaths)
                ]
            )
        );

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
        $property = Property::findOrFail($id);
        $townships = Township::with('quaters')->get();
        $categories = Category::all();

        return view('admin.property.edit', compact('property', 'townships', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $property = Property::findOrFail($id);

        if (Auth::user()->cannot('update', $property)) {
            abort(403, "vous ne disposer pas acces de droit pour mettre a jour cette bien");
        }

        $property->update($request->all());

        return redirect('/admin')->with('success', "votre $property->name a ete mis a jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);

        if (Auth::user()->cannot('delete', $property)) {
            abort(403, "vous ne disposer pas acces de droit pour supprimer cette bien");
        }

        $property->delete();

        return redirect()->back()->with('success', 'votre property a ete supprimer avec success');
    }
}
