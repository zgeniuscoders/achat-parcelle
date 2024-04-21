<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        if (Auth::user()->cannot('create', Category::class)) {
            abort(403);
        }

        Category::create($request->all());
        return redirect()->back()->with("success", "success");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::user()->cannot('create', Category::class)) {
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::user()->cannot('update', Category::class)) {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::user()->cannot('delete', Category::class)) {
            abort(403);
        }
    }
}
