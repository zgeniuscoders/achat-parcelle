<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;

class MessageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $senderId = 1;

        return MessageResource::collection(
            Message::where(function ($query) use ($senderId, $id) {
                $query->where('sender_id', $senderId)
                    ->where('receiver_id', $id);
            })
                ->orWhere(function ($query) use ($senderId, $id) {
                    $query->where('sender_id', $id)
                        ->where('receiver_id', $senderId);
                })
                ->orderBy('created_at', 'asc')
                ->get()
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = Message::findOrFail($id);
        $message->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
    }
}
