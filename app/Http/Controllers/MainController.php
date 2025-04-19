<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {


        $projects = Project::all();
        $skills = Skill::all();
        $achievements = Project::all();
        $contact = Contact::all();

        return view('Main.index', compact('projects', 'skills', 'achievements', 'contact'));
    }

    public function about()
    {
        return view('Main.about');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('Main.project', compact('projects'));
    }

    public function skills()
    {
        $skills = Skill::all();
        return view('Main.skill', compact('skills'));
    }

    public function achievements()
    {
        $achievements = Project::all();
        return view('Main.achievement', compact('achievements'));
    }

    public function contact()
    {
        return view('Main.contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Contact::create($request->all());
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send message, please try again.');
        }
    }
}
