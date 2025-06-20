<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index()
    {
        $members = Member::where('user_id', auth()->id())->get();
        return view('events.index', compact('members'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'nullable|string',
            'assign_task' => 'nullable|array',
            'assign_task.*' => 'exists:members,id',

        ]);

        $task = Task::create([
            'user_id' => Auth::id(),
            'description' => $validated['description'],

        ]);
        if (!empty($validated['assign_task'])) {
            $task->members()->attach($validated['assign_task']);
        }
        return redirect()->route('event')->with('success', 'Task assign  successfully');
    }
}
