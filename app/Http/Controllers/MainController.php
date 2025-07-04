<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Achievement;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::select('id', 'name', 'description', 'url', 'image', 'github', 'technologies')
            ->paginate(3, ['*'], 'project_page');

        $skills = Skill::select('id', 'name', 'competention', 'description')
            ->paginate(6, ['*'], 'skill_page');

        $achievements = Achievement::select('id', 'name', 'description', 'image')
            ->paginate(3, ['*'], 'achievement_page');

        $contacts = Contact::select('id', 'email', 'message')->get();
        $countProjects = Project::count();
        $countSkills = Skill::count();
        $countAchievements = Achievement::count();

        return view('Main.index', compact('projects', 'skills', 'achievements', 'contacts', 'countProjects', 'countSkills', 'countAchievements'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);



        try {
            Contact::create([
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            return redirect()->to('/#contact')->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send message, please try again.');
        }
    }
}
