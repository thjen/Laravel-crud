<?php

namespace App\Http\Controllers;

use Webpatser\Uuid\Uuid;
use App\Video;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    public function index() {
        return view('viewofthjen');
    }
    
    public function query($email) {
        return $tasks = Task::join('users', 'users.user_id', '=', 'tasks.user_id')
            ->select('tasks.*', 'users.name')
            ->where('email', $email)
            ->orderBy('task_id')
            ->get();
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $tasks = TaskController::query($email);
        $request->session()->put('user', $email);
        return view('viewofthjen', compact('tasks'));
    }

    public function delete(Request $request, $task_id) {
        Task::where('task_id', $task_id)->delete(); 
        $email = $request->session()->get('user');
        $tasks = TaskController::query($email);
        return view('viewofthjen', compact('tasks'));
    }

    public function edit(Request $request, $task_id) {
        $task = Task::where('task_id', $task_id)
            ->select('task_id','task_name', 'task_description', 'user_id')
            ->get();
        return view('form', compact('task'));
    }

    public function add(Request $request) {
        return view('form');
    }

    public function insert(Request $request) {
        Task::insert([
                'task_name' => $request->input('task_name'),
                'task_description' => $request->input('task_description'),
                'user_id' => $request->input('user_id')
            ]);
        $email = $request->session()->get('user');
        $tasks = TaskController::query($email);
        return view('viewofthjen', compact('tasks'));
    }

    public function update(Request $request, $task_id) {
        Task::where('task_id', $task_id)
            ->update([
                'task_name' => $request->input('task_name'),
                'task_description' => $request->input('task_description'),
                'user_id' => $request->input('user_id')
            ]);
        $email = $request->session()->get('user');
        $tasks = TaskController::query($email);
        return view('viewofthjen', compact('tasks'));
    }

    public function upload(Request $request) {
        $videos = Video::all();
        return view('video', compact('videos'));
    }

    public function uploadRequest(Request $request) {
        $video = $request->all();
        $video['uuid'] = (string) Uuid::generate();
        if($request->hasFile('file')){
            $video['file'] = $request->file->getClientOriginalName();
            $request->file->storeAs('videos', $video['file']);
        }
        Video::create($video);
        $videos = Video::all();
        return view('video', compact('videos'));
    }

    public function download($uuid) {
        $video = Video::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/videos/' . $video->file);
        return response()->download($pathToFile);
    }

}
