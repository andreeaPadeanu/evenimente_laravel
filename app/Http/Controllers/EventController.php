<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
    $events = Event::all();
    return view('events', compact('events'));
    }

    public function show(Event $event)
    {
        return view('show', compact('event'));
}

}
