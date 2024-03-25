<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::paginate(10);

        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $group = Group::create($request->all());

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::where('id', $id)->first();

        return view('groups.show', ['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group = Group::where('id', $id)->first();

        return view('groups.edit', ['group' => $group]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, string $id)
    {
        $group = Group::where('id', $id)->update($request->validated());

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Group::where('id', $id)->delete();

        return back();
    }
}
