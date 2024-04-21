<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoostController extends Controller
{
    public function show(Property $property){
        return view('admin.boost.index',compact('property'));
    }

    public function boost(Request $request){

    }
}
