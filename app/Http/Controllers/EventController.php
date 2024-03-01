<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('events.index', compact('events'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'time' => 'required|date',
            'location' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public/events');
        }

        Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Event added successfully!');
    }




    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'time' => 'required|date',
            'location' => 'required|max:255',
        ]);

        $data = $request->only(['name', 'time', 'location']);

        if ($request->hasFile('image')) {
            // Optionally delete the old image from storage
            // Storage::delete($event->image);

            $data['image'] = $request->file('image')->store('public/events');
        }

        $event->update($data);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

}
