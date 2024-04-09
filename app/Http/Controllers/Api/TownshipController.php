<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{

    public function store(Request $request)
    {
        Township::create($request->all());
        return redirect()->back()->with("success', 'La commune $request->name a ete ajouter avec success");
    }

    public function index()
    {
        $townships = Township::all();
        return view("admin.township.index", compact("townships"));
    }

    public function destroy(string $id)
    {
        $township = Township::findOrFail($id);
        $township->delete();
        return redirect()->back();
    }
}
