<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $subjects = Subject::orderBy('display_order')->orderBy('id')->get();
        return view('admin.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'subject_name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'display_order' => [
                'nullable',
                'integer',
                'min:0',
                Rule::unique('subjects', 'display_order')
            ],
            'is_active' => ['nullable', 'boolean'],
        ]);

        // Handle checkbox: if not present, set to false
        $validated['is_active'] = $request->has('is_active') ? (bool) $request->input('is_active') : false;

        // Handle icon upload
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('subjects/icons', 'public');
            $validated['icon_url'] = $iconPath;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('subjects/images', 'public');
            $validated['image_url'] = $imagePath;
        }

        // Remove icon and image from validated array as they're not in the model fillable
        unset($validated['icon'], $validated['image']);

        Subject::create($validated);

        return redirect()->route('subjects.index')
            ->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject): View
    {
        return view('admin.subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject): View
    {
        return view('admin.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject): RedirectResponse
    {
        $validated = $request->validate([
            'subject_name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'display_order' => [
                'nullable',
                'integer',
                'min:0',
                Rule::unique('subjects', 'display_order')->ignore($subject->id)
            ],
            'is_active' => ['nullable', 'boolean'],
        ]);

        // Handle checkbox: if not present, set to false
        $validated['is_active'] = $request->has('is_active') ? (bool) $request->input('is_active') : false;

        // Handle icon upload
        if ($request->hasFile('icon')) {
            // Delete old icon if exists
            if ($subject->icon_url && Storage::disk('public')->exists($subject->icon_url)) {
                Storage::disk('public')->delete($subject->icon_url);
            }
            $iconPath = $request->file('icon')->store('subjects/icons', 'public');
            $validated['icon_url'] = $iconPath;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($subject->image_url && Storage::disk('public')->exists($subject->image_url)) {
                Storage::disk('public')->delete($subject->image_url);
            }
            $imagePath = $request->file('image')->store('subjects/images', 'public');
            $validated['image_url'] = $imagePath;
        }

        // Remove icon and image from validated array as they're not in the model fillable
        unset($validated['icon'], $validated['image']);

        $subject->update($validated);

        return redirect()->route('subjects.index')
            ->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject): RedirectResponse
    {
        // Delete associated files
        if ($subject->icon_url && Storage::disk('public')->exists($subject->icon_url)) {
            Storage::disk('public')->delete($subject->icon_url);
        }
        if ($subject->image_url && Storage::disk('public')->exists($subject->image_url)) {
            Storage::disk('public')->delete($subject->image_url);
        }

        $subject->delete();

        return redirect()->route('subjects.index')
            ->with('success', 'Subject deleted successfully.');
    }
}
