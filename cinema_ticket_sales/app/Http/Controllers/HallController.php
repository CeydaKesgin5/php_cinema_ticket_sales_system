<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HallController extends Controller
{
    public function index()
    {
        return response()->json(Hall::all());
    }

    public function store(Request $request)
    {
        $hall = Hall::create($request->all());
        return response()->json($hall, Response::HTTP_CREATED);
    }

    public function show(Hall $hall)
    {
        return response()->json($hall);
    }

    public function update(Request $request, Hall $hall)
    {
        $hall->update($request->all());
        return response()->json($hall);
    }

    public function destroy(Hall $hall)
    {
        $hall->delete();
        return response()->noContent();
    }
}
