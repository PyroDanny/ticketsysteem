<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function events(){
        // $events = Event::where('event_start', '<', now())->get();
        $events = Event::all();
        return view('pages/events')->with('events', $events);
    }

    public function testroute(){
        return view('pages/testroute');
    }

    public function testroute2(){
        return view('pages/testroute2');
    }
}
