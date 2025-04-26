<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        return Task::all();
    }

    public function store(Request $request){
        try{
            $request->validate([
                'title' => 'required|string|max:255',
            ]);
            $task = Task::create([
                'title' => $request->title,
            ]);
            return $task; 
        }catch(\Exception $e){
            return response()->json(['error' => 'Failed to create task'], 500);
        } 
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->title,
            'is_completed' => $request->is_completed,
        ]);

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['message' => 'Task deleted']);

    }


}
