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
        $contacts = Contact::all();

        return view('main', compact('skills', 'projects', 'contacts'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
