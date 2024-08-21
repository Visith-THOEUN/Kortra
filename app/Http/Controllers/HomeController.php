<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        if (auth()->user()->hasRole('admin')) {
            $num_events = Event::count();

            return view('dashboard', ['num_events' => $num_events]);
        }
        $num_events = Event::where('group_id', auth()->user()->group_id)->count();

        return view('dashboard', ['num_events' => $num_events]);
    }
}
