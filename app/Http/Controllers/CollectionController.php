<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'search' => 'nullable|string',
            'type' => 'nullable|in:cards,collectibles',
        ]);

        // Build the query with optional search and type filters
        $query = Collection::query();

        if (!empty($validated['search'])) {
            $query->where('name', 'like', '%' . $validated['search'] . '%');
        }

        if (!empty($validated['type'])) {
            $query->where('type', $validated['type']);
        }

        // Paginate the results
        $collections = $query->paginate(10); // Display 10 items per page

        return view('collections.index', compact('collections'));
    }


    public function create()
    {
        return view('collections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'link' => 'required|url',
            'type' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        Collection::create($data);

        return redirect()->route('collections.index')->with('success', 'Collection item created successfully.');
    }

    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }

    public function edit(Collection $collection)
    {
        return view('collections.edit', compact('collection'));
    }

    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
            'type' => 'required',
        ]);

        $data = $request->only(['name', 'link', 'type']);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        $collection->update($data);

        return redirect()->route('collections.index')->with('success', 'Collection item updated successfully.');
    }

    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('collections.index')->with('success', 'Collection item deleted successfully.');
    }
}
