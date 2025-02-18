<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showProjects()
    {
        $post = Project::all();

        return view('dashboard.project', compact('post'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',


        ]);

        project::create($request->all());
    }

    public function showSkills()
    {
        return view('dashboard.skill');
    }

    public function showContact()
    {
        return view('dashboard.contact');
    }

    public function createProjects()
    {
        return view('dashboard.project.create');
    }

    public function createSkills()
    {
        return view('dashboard.skill.create');
    }

    public function updateProjects()
    {
        return view('dashboard.project.update');
    }

    public function Skilupdatels() // Kemungkinan typo, harusnya "updateSkills"
    {
        return view('dashboard.skill.update');
    }

    public function deleteProjects()
    {
        return view('dashboard.projects.delete');
    }

    public function deleteSkills()
    {
        return view('dashboard.skills.delete');
    }
}
