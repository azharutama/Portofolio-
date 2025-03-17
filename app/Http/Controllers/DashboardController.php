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

        $auth = Auth::user();

        if (!$auth) {
            return redirect()->route('login');
        }

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
            'url' => 'required',
            'string',
            'image' => 'required',
            'string',
            'github' => 'required',
            'string',
            'technologies' => 'required',
            'string',
        ]);



        project::create($request->all());
    }


    public function storeUpdateProject(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'string',
            'image' => 'required',
            'string',
            'github' => 'required',
            'string',
            'technologies' => 'required',
            'string',
        ]);

        $post = Project::find($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->url = $request->url;
        $post->image = $request->image;
        $post->github = $request->github;
        $post->technologies = $request->technologies;
        $post->save();
        return redirect()->route('dashboard.project');
    }

    public function deleteProject($id)
    {
        $post = Project::find($id);
        $post->delete();
        return redirect()->route('dashboard.project');
    }

    public function storeSkill(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'string',
            'competention' => 'required',
            'string',
            'description' => 'required',

        ]);



        Skill::create($request->all());
    }

    public function storeUpdateSkill(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'string',
            'competention' => 'required',
            'string',
            'description' => 'required',
        ]);

        $post = Skill::find($id);
        $post->name = $request->name;
        $post->competention = $request->competention;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('dashboard.skill');
    }


    public function deleteSkill($id)
    {
        $post = Skill::find($id);
        $post->delete();
        return redirect()->route('dashboard.skill');
    }

    public function showSkills()
    {
        return view('dashboard.skill');
    }

    public function showContact()
    {

        $contacts = Contact::all();
        return view('dashboard.contact', compact('contacts'));
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

    public function Skilupdatels()
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
