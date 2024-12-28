<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events.show_events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('events.add_event', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, StoreEventRequest $req)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.event.index')->withErrors($validate->errors());
        $event = Event::create($req->validated());
        return redirect()->route('admin.event.index')->with('type', 'success')->with('msg', 'Event Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.update_event', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpdateEventRequest $req, Event $event)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.event.index')->withErrors($validate->errors());

        $event->update($req->validated());

        return redirect()->route('admin.event.index')->with('type', 'success')->with('msg', 'Event updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.event.index')->with('type', 'danger')->with('msg', 'Event deleted Successfully');
    }
}
