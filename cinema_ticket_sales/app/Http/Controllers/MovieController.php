<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json(Movie::all());
    }

    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, Response::HTTP_CREATED);
    }

    public function show(Movie $movie)
    {
        return response()->json($movie);
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return response()->json($movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->noContent();
    }
}
