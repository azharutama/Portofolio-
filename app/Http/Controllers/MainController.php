<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Achievement;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {


        $projects = Project::all();
        $skills = Skill::all();
        $achievements = Achievement::all();
        $contact = Contact::all();

        return view('Main.index', compact('projects', 'skills', 'achievements', 'contact'));
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
