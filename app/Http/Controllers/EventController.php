<?php

namespace App\Http\Controllers;

use App\Models\Eveniment; // Modificat de la use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Eveniment::all(); // Modificat de la Event::all();
        return view('events', compact('events'));
    }

    public function show(Eveniment $event) // Modificat de la Event $event
    {
        return view('show', compact('event'));
    }
}