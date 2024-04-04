<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quater;
use App\Models\Township;
use Illuminate\Http\Request;

class QuaterController extends Controller
{
    public function index(){
        $townships = Township::with("quaters")->get();
        $quaters = Quater::with("township")->get();
        return view("admin.quater.index", compact("townships", "quaters"));
    }

    public function store(Request $request){
        Quater::create($request->all());
        return redirect()->back()->with("success', 'Le quartier $request->name a ete ajouter avec success");
    }
}
