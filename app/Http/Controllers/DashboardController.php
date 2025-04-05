<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        return view('dashboard');
    }

    // Project Methods
    public function showProject()
    {
        $projects = Project::all();
        return view('dashboard.project', compact('projects'));
    }

    public function createProjects()
    {
        return view('dashboard.project.create');
    }

    public function storeProjects(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        // Simpan gambar ke storage (public disk)
        if ($request->hasFile('image')) {
            // Store the image and retrieve the file path
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // If image upload failed, return with an error message
            return back()->withErrors(['image' => 'Image upload failed']);
        }

        // Store the project in the database
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,  // Store the image path in the database
            'github' => $request->github,
            'technologies' => $request->technologies,
        ]);

        // Redirect to the project dashboard with success message
        return redirect()->route('dashboard.project')->with('success', 'Project added successfully!');
    }



    public function updateProjects($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.project.update', compact('project'));
    }

    public function storeUpdateProjects(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        // Simpan gambar ke storage (public disk)
        if ($request->hasFile('image')) {
            // Store the image and retrieve the file path
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // If image upload failed, return with an error message
            return back()->withErrors(['image' => 'Image upload failed']);
        }

        // Store the project in the database
        Project::update([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,  // Store the image path in the database
            'github' => $request->github,
            'technologies' => $request->technologies,
        ]);

        $project->update($request->all());

        return redirect()->route('dashboard.project');
    }

    public function deleteProjects($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('dashboard.project');
    }

    // Skill Methods
    public function showSkill()
    {
        $skills = Skill::all();
        return view('dashboard.skill', compact('skills'));
    }

    public function createSkills()
    {
        return view('dashboard.skill.create');
    }

    public function storeSkills(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'competention' => 'required|string',
            'description' => 'required|string',
        ]);

        Skill::create($request->all());
        return redirect()->route('dashboard.skill');
    }

    public function updateSkills($id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboard.skill.update', compact('skill'));
    }

    public function storeUpdateSkills(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'competention' => 'required|string',
            'description' => 'required|string',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return redirect()->route('dashboard.skill');
    }

    public function deleteSkills($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('dashboard.skill');
    }

    // Contact Methods
    public function showContact()
    {
        $contacts = Contact::all();
        return view('dashboard.contact', compact('contacts'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());
        return redirect()->route('dashboard.contact');
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('dashboard.contact');
    }

    public function showAchievement($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('dashboard.achievement', compact('achievement'));
    }
}
