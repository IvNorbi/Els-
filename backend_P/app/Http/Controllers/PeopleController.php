<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return People::with('movies')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //nem kell
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeopleRequest $request)
    {
        $people = new People();

        $people->name = $request->name;
        $people->birth_date = $request->birth_date;
        $people->country = $request->country;
        $people->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        return $people->with('movies')->first();    //visszaadja az ember adatait a kacsolódó filmekkel együtt
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        //nem kell
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeopleRequest $request, People $people)
    {
        if ($request->name) {
            $people->name = $request->name;
        }
        if ($request->birth_date) {
            $people->birth_date = $request->birth_date;
        }
        if ($request->country) {
            $people->country = $request->country;
        }
        $people->save();

        return $people;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        $people->delete();
        return true;
    }
}
