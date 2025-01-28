<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Inertia\Inertia;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return Inertia::render('Dashboard', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create($request->only('title'));

        return redirect()->route('dashboard');
    }
}
