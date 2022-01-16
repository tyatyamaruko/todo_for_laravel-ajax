<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index() {
        $todos = Todo::all();
        return view('welcome', ["todos" => $todos]);
    }

    public function create(Request $request) {
        $result = $request->all();
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();
        return $result;
    }
}
