<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Place;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::latest()->get();

        return response(['data' => $places ], 200);
    }

    public function store(PlaceRequest $request)
    {
        $place = Place::create($request->all());

        return response(['data' => $place ], 201);

    }

    public function show($id)
    {
        $place = Place::findOrFail($id);

        return response(['data', $place ], 200);
    }

    public function update(PlaceRequest $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());

        return response(['data' => $place ], 200);
    }

    public function destroy($id)
    {
        Place::destroy($id);

        return response(['data' => null ], 204);
    }
}
