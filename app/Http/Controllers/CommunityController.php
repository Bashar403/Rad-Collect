<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the community members.
     */
    public function index()
    {
        $communityMembers = Community::latest()->get();
        return view('community.index', compact('communityMembers'));
    }

    /**
     * Show the form for creating a new community member.
     */
    public function create()
    {
        return view('community.create');
    }

    /**
     * Store a newly created community member in storage.
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
            $request->image->move(public_path('images/community'), $imageName);
            $data['image'] = 'images/community/' . $imageName;
        }

        Community::create($data);

        return redirect()->route('community.index')->with('success', 'Community member added successfully.');
    }

    /**
     * Display the specified community member.
     */
    public function show(Community $community)
    {
        return view('community.show', compact('community'));
    }

    /**
     * Show the form for editing the specified community member.
     */
    public function edit(Community $community)
    {
        return view('community.edit', compact('community'));
    }

    /**
     * Update the specified community member in storage.
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
            // Storage::delete($community->image);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/community'), $imageName);
            $data['image'] = 'images/community/' . $imageName;
        }

        $community->update($data);

        return redirect()->route('community.index')->with('success', 'Community member updated successfully.');
    }

    /**
     * Remove the specified community member from storage.
     */
    public function destroy(Community $community)
    {
        // Optionally delete the image file
        // Storage::delete($community->image);

        $community->delete();
        return redirect()->route('community.index')->with('success', 'Community member deleted successfully.');
    }
}
