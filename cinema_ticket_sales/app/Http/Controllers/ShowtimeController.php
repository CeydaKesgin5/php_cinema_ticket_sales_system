<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShowtimeController extends Controller
{
    public function index()
    {
        return response()->json(Showtime::all());
    }

    public function store(Request $request)
    {
        $showtime = Showtime::create($request->all());
        return response()->json($showtime, Response::HTTP_CREATED);
    }

    public function show(Showtime $showtime)
    {
        return response()->json($showtime);
    }

    public function update(Request $request, Showtime $showtime)
    {
        $showtime->update($request->all());
        return response()->json($showtime);
    }

    public function destroy(Showtime $showtime)
    {
        $showtime->delete();
        return response()->noContent();
    }
}
