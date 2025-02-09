<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        return ToDo::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'targetdate' => 'nullable|date',
            'status' => 'required|string|in:pending,completed',
        ]);

        $todo = ToDo::create($validatedData);
        return response()->json($todo, 201);
    }

    public function show($id)
    {
        return ToDo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'targetdate' => 'nullable|date',
            'status' => 'required|string|in:pending,completed',
        ]);

        $todo = ToDo::findOrFail($id);
        $todo->update($validatedData);
        return response()->json($todo, 200);
    }

    public function destroy($id)
    {
        ToDo::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
