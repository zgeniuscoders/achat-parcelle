<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BoostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $today = Carbon::now();
        $newDate = Carbon::parse($today);

        switch ($request->boosted_type) {
            case "standard": {
                    $days = 3;
                    break;
                }
            case "premium": {
                    $days = 7;

                    break;
                }
            case "gold": {
                    $days = 14;
                    break;
                }
        }

        $newDate->addDays($days);

        $property = Property::findOrFail(1);
        $property->update([
            "boosted" => true,
            "boosted_until" => $newDate->toDateTimeString()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
