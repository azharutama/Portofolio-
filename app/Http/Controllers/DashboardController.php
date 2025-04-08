<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
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

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            return back()->withErrors(['image' => 'Image upload failed']);
        }

        Project::update([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,
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

    public function createAchievement()
    {
        return view('dashboard.achievement.create');
    }

    public function storeAchievement(Request $request)
    {
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
        $achievement = Achievement::findOrFail($id);
        return view('dashboard.achievement.update', compact('achievement'));
    }

    public function storeUpdateAchievement(Request $request, $id)
    {
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
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        return redirect()->route('dashboard.achievement');
    }
}
