<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TaskList;

class SearchController extends Controller
{
    /**
     * Handle search requests
     */
    public function search(Request $request)
    {
        $query = $request->input('input');

        // validasi input
        $request->validate([
            'query' => 'required|string|min:3'
        ]);

        // Pencarian di table tasks berdasarkan nama atau deskripsi
        $taskResults = Task::where('nama', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->get();

        // Pencarian di table task_lists berdasarkan nama
        $taskListResults = TaskList::where('name', 'LIKE', "%{$query}%")
        ->get();

        return response()->json([
            'tasks' => $taskResults,
            'task_lists' => $taskListResults
        ]);
    }
}
