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
        $projects = Project::all(); // Ambil semua data project dari database
        $skills = Skill::all(); // Ambil semua data skill dari database
        return view('main', compact('skills', 'projects')); // Kirim ke view index

    }


    public function storeContact(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'string',
            'subject' => 'required',
            'string',
            'message' => 'required',
            'string',
        ]);

        Contact::create($request->all());
    }
}
