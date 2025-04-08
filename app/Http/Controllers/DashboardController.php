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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $projects = Project::all();
        return view('dashboard.project', compact('projects'));
    }

    public function createProjects()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('dashboard.project.create');
    }

    public function storeProjects(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            return back()->withErrors(['image' => 'Image upload failed']);
        }

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,
            'github' => $request->github,
            'technologies' => $request->technologies,
        ]);

        return redirect()->route('dashboard.project')->with('success', 'Project added successfully!');
    }

    public function updateProjects($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $project = Project::findOrFail($id);
        return view('dashboard.project.update', compact('project'));
    }

    public function storeUpdateProjects(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            return back()->withErrors(['image' => 'Image upload failed']);
        }

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,
            'github' => $request->github,
            'technologies' => $request->technologies,
        ]);

        return redirect()->route('dashboard.project');
    }

    public function deleteProjects($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('dashboard.project');
    }

    // Skill Methods
    public function showSkill()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $skills = Skill::all();
        return view('dashboard.skill', compact('skills'));
    }

    public function createSkills()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('dashboard.skill.create');
    }

    public function storeSkills(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $skill = Skill::findOrFail($id);
        return view('dashboard.skill.update', compact('skill'));
    }

    public function storeUpdateSkills(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('dashboard.skill');
    }

    // Contact Methods
    public function showContact()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $contacts = Contact::all();
        return view('dashboard.contact', compact('contacts'));
    }

    public function storeContact(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('dashboard.contact');
    }

    // Achievement Methods
    public function showAchievement($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $achievement = Achievement::findOrFail($id);
        return view('dashboard.achievement', compact('achievement'));
    }

    public function createAchievement()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('dashboard.achievement.create');
    }

    public function storeAchievement(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        Achievement::create($request->all());
        return redirect()->route('dashboard.achievement');
    }

    public function updateAchievement($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $achievement = Achievement::findOrFail($id);
        return view('dashboard.achievement.update', compact('achievement'));
    }

    public function storeUpdateAchievement(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return redirect()->route('dashboard.achievement');
    }

    public function deleteAchievement($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        return redirect()->route('dashboard.achievement');
    }
}
