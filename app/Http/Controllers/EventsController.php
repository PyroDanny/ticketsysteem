<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard/events/index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/events/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'photo' => 'required',
            'event_start' => 'required|date',
            'event_end' => 'required|date',
            'max_tickets' => 'required|numeric',
            'location' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'price' => 'required|numeric',
            'preorder_price' => 'required',
            'description' => 'required|min:10'
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->photo = $request->photo;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        $event->max_tickets = $request->max_tickets;
        $event->location = $request->location;
        $event->address = $request->address;
        $event->zip = $request->zip;
        $event->price = $request->price;
        $event->preorder_price = $request->preorder_price;
        $event->description = $request->description;
        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard/events/show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard/events/edit')
        ->with(['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'required',
            'event_start' => 'required|date',
            'event_end' => 'required|date',
            'max_tickets' => 'required|numeric',
            'location' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'price' => 'required|numeric',
            'preorder_price' => 'required',
            'description' => 'required|min:10'
        ]);

        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->photo = $request->photo;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        $event->max_tickets = $request->max_tickets;
        $event->location = $request->location;
        $event->address = $request->address;
        $event->zip = $request->zip;
        $event->price = $request->price;
        $event->preorder_price = $request->preorder_price;
        $event->description = $request->description;
        $event->save();

        return back()->with('success', 'Event adjusted!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);
        return redirect()->route('events.index');
    }
}
