<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Event;
use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $event_id)
    {
        $event = Event::where('id', $event_id)->first();
        $guests = Guest::where('event_id', $event_id)->paginate(10);

        return view('guests.index', ['guests' => $guests, 'event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $event_id)
    {
        $event = Event::where('id', $event_id)->first();

        return view('guests.create', ['event' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request, int $event_id)
    {

        Guest::create(array_merge($request->validated(), ['event_id' => $event_id]));

        return redirect()->route('guests.index', $event_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $event_id, string $id)
    {
        $guest = Guest::where('id', $id)->where('event_id', $event_id)->first();

        return view('guests.show', ['guest' => $guest]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $event_id, string $id)
    {
        $guest = Guest::where('id', $id)->where('event_id', $event_id)->first();
        $event = Event::where('id', $event_id)->first();
        return view('guests.edit', ['guest' => $guest, 'event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, int $event_id, string $id)
    {
        Guest::where('id', $id)->where('event_id', $event_id)->update($request->validated());

        return redirect()->route('guests.index', $event_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $event_id, string $id)
    {
        Guest::where('id', $id)->delete();

        return redirect()->route('guests.index', $event_id);
    }
}
