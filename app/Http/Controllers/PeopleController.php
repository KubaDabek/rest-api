<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    public function show($id)
    {
        $people = People::find($id);
        
        if (!$people) {
            return response()->json(['message' => 'people not found'], 404);
        }

        return response()->json($people);
    }

    public function update(Request $request, $id)
    {
        $people = People::find($id);


        if (!$people) {
            return response()->json(['message' => 'people not found'], 404);
        }

        $people->update($request->all());

        return response()->json($people);
    }

    public function destroy($id)
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'people not found'], 404);
        }

        $people->delete();

        return response()->json(['message' => 'people deleted']);
    }

    public function store(Request $request)
    {
        $people = People::create($request->all());

        return response()->json($people, 201);
    }
}
