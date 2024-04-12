<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TownshipController extends Controller
{

    public function index()
    {
        $townships = Township::all();
        return view("admin.township.index", compact("townships"));
    }

    public function store(Request $request)
    {
        if (Auth::user()->cannot('create', Township::class)) {
            abort(403);
        }

        Township::create($request->all());
        return redirect()->back()->with("success', 'La commune $request->name a ete ajouter avec success");
    }


    public function destroy(string $id)
    {
        $township = Township::findOrFail($id);

        if (Auth::user()->cannot('destroy', $township)) {
            abort(403);
        }

        $township->delete();
        return redirect()->back();
    }
}
