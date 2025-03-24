<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('dashboard');
    }

    public function showProjects()
    {
        $projects = Project::all();
        return view('dashboard.project', compact('projects'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|string',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        Project::create($request->all());
        return redirect()->route('dashboard.project');
    }

    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|string',
            'github' => 'required|string',
            'technologies' => 'required|string',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());

        return redirect()->route('dashboard.project');
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('dashboard.project');
    }

    public function showSkills()
    {
        return view('dashboard.skill');
    }

    public function storeSkill(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'competention' => 'required|string',
            'description' => 'required|string',
        ]);

        Skill::create($request->all());
        return redirect()->route('dashboard.skill');
    }

    public function updateSkill(Request $request, $id)
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

    public function deleteSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('dashboard.skill');
    }

    public function showContact()
    {
        $contacts = Contact::all();
        return view('dashboard.contact', compact('contacts'));
    }

    public function createProject()
    {
        return view('dashboard.project.create');
    }

    public function createSkill()
    {
        return view('dashboard.skill.create');
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.project.update', compact('project'));
    }

    public function editSkill($id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboard.skill.update', compact('skill'));
    }
}
