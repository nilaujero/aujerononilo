<?php

namespace App\Http\Controllers;


use App\Models\Dogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dogs::all();

        return view('dogs.index', compact('dogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'breed' => 'required|string',
            'age' => 'required|integer',
            'size' => 'required|string',
            'color' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
            'image' => 'required|image',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);

        Dogs::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'size' => $request->size,
            'color' => $request->color,
            'height' => $request->height,
            'weight' => $request->weight,
            'image' => $imageName,
        ]);

        return redirect()->route('dogs.index')->with('success', 'Dog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dogs $dogs)
    {
        return view('dogs.show', compact('dogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dogs $dogs)
    {
        return view('dogs.edit', compact('dogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dogs $dogs)
    {
        $request->validate([
            'name' => 'required|string',
            'breed' => 'required|string',
            'age' => 'required|integer',
            'size' => 'required|string',
            'color' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $dogs->image = $imageName;
        }

        $dogs->update([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'size' => $request->size,
            'color' => $request->color,
            'height' => $request->height,
            'weight' => $request->weight,
        ]);

        return redirect()->route('dogs.index')->with('success', 'Dog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dogs $dogs)
    {
        Storage::delete('public/images/' . $dogs->image);
        $dogs->delete();

        return redirect()->route('dogs.index')->with('success', 'Dog deleted successfully!');
    }
}
