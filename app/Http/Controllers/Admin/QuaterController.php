<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Quater;
use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuaterController extends Controller
{
    public function index(){
        $townships = Township::with("quaters")->get();
        $quaters = Quater::with("township")->get();
        return view("admin.quater.index", compact("townships", "quaters"));
    }

    public function store(Request $request){


        if(Auth::user()->cannot('create',Quater::class)){
            abort(403);
        }
        
        Quater::create($request->all());
        return redirect()->back()->with("success', 'Le quartier $request->name a ete ajouter avec success");
    }
}
