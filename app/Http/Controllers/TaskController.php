<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    function create(Request $request){
       $data = Task::create($request->all());
        return $data;

    }

    function index(){
        $data = Task::all();
        return response()->json($data);
    }

    function delete($id){
        $task = Task::where('id', $id)->first();
        $task->delete();
    }
}
