<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportingController extends Controller
{
    public function index(){
        $properties = Property::with(['quater', 'quater.township'])->where('user_id', Auth::user()->id)->get();
        return view("admin.reporting.index", compact("properties"));
    }
}
