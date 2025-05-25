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


        $projects = Project::select('id', 'name', 'description', 'url', 'image', 'github', 'technologies')->get();
        $skills = Skill::select('id', 'name', 'competention', 'description')->paginate(6);;
        $achievements = Achievement::select('id', 'name', 'description', 'image')->get();
        $contacts = Contact::select('id',  'email', 'message')->get(); // Pakai jamak untuk konsistensi

        return view('Main.index', compact('projects', 'skills', 'achievements', 'contacts'));
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
