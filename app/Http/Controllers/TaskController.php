<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function show($id)
    {
        return view('tasks.show', compact('id'));
    }

    public function edit($id)
    {
        return view('tasks.edit', compact('id'));
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect()->route('task.index')->with('success', 'Task deleted successfully!');
    }

    //reorder function moved to livewire

    // public function reorder(Request $request)
    // {
    //     $request->validate([
    //         'ids' => 'required|array',
    //         'ids.*' => 'integer',
    //     ]);

    //     foreach ($request->ids as $index => $id) {
    //         DB::table('tasks')
    //             ->where('id', $id)
    //             ->update([
    //                 'priority' => $index + 1,
    //             ]);
    //     }
    // }
}
