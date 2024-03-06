<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the communities members.
     */
    public function index()
    {
        $communities = Community::latest()->get();
        return view('communities.index', compact('communities'));
    }

    /**
     * Show the form for creating a new communities member.
     */
    public function create()
    {
        return view('communities.create');
    }

    /**
     * Store a newly created communities member in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:communities,email',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/communities'), $imageName);
            $data['image'] = 'images/communities/' . $imageName;
        }

        Community::create($data);

        return redirect()->route('communities.index')->with('success', 'Community member added successfully.');
    }

    /**
     * Display the specified communities member.
     */
    public function show(Community $community)
    {
        return view('communities.show', compact('community'));
    }

    /**
     * Show the form for editing the specified communities member.
     */
    public function edit(Community $community)
    {
        return view('communities.edit', compact('community'));
    }

    /**
     * Update the specified communities member in storage.
     */
    public function update(Request $request, Community $community)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:communities,email,'.$community->id,
            'description' => 'required',
            'image' => 'image',
        ]);

        $data = $request->only(['name', 'email', 'description']);

        if ($request->hasFile('image')) {
            // Optionally delete the old image
            // Storage::delete($communities->image);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/communities'), $imageName);
            $data['image'] = 'images/communities/' . $imageName;
        }

        $community->update($data);

        return redirect()->route('communities.index')->with('success', 'Community member updated successfully.');
    }

    /**
     * Remove the specified communities member from storage.
     */
    public function destroy(Community $community)
    {
        // Optionally delete the image file
        // Storage::delete($communities->image);

        $community->delete();
        return redirect()->route('communities.index')->with('success', 'Community member deleted successfully.');
    }
}
