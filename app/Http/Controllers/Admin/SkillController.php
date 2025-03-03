<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the skills.
     */
    public function index()
    {
        $skills = Skill::orderBy('display_order')->paginate(10);
        return view('backend.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new skill.
     */
    public function create()
    {
        // Get the next order value
        $nextOrder = Skill::max('display_order') + 1;
        return view('backend.skills.create', compact('nextOrder'));
    }

    /**
     * Store a newly created skill in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
            'category' => 'nullable|string|max:255',
            'display_order' => 'required|integer|min:1',
        ]);

        Skill::create($validated);

        return redirect()->route('admin.skills.index')
            ->with('success', 'Skill created successfully.');
    }

    /**
     * Show the form for editing the specified skill.
     */
    public function edit(Skill $skill)
    {
        return view('backend.skills.edit', compact('skill'));
    }

    /**
     * Update the specified skill in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
            'category' => 'nullable|string|max:255',
            'display_order' => 'required|integer|min:1',
        ]);

        $skill->update($validated);

        return redirect()->route('admin.skills.index')
            ->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified skill from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('admin.skills.index')
            ->with('success', 'Skill deleted successfully.');
    }
}
