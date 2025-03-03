<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalInfoController extends Controller
{
    /**
     * Show the form for editing personal information.
     */
    public function edit()
    {
        $personalInfo = PersonalInfo::first() ?? new PersonalInfo();
        return view('backend.personal_info.edit', compact('personalInfo'));
    }

    /**
     * Update the personal information.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'about_text' => 'required|string',
            'resume' => 'nullable|mimes:pdf,doc,docx|max:10240',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $personalInfo = PersonalInfo::first();

        if (!$personalInfo) {
            $personalInfo = new PersonalInfo();
        }

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($personalInfo->profile_image) {
                Storage::disk('public')->delete($personalInfo->profile_image);
            }

            $file = $request->file('profile_image');
            $filename = 'profile_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile', $filename, 'public');
            $validated['profile_image'] = $path;
        }

        // Handle resume upload
        if ($request->hasFile('resume')) {
            // Delete old resume if exists
            if ($personalInfo->resume) {
                Storage::disk('public')->delete($personalInfo->resume);
            }

            $file = $request->file('resume');
            $filename = 'resume_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('resume', $filename, 'public');
            $validated['resume'] = $path;
        }

        $personalInfo->fill($validated);
        $personalInfo->save();

        return redirect()->route('admin.personal_info.edit')
            ->with('success', 'Personal information updated successfully.');
    }
}
