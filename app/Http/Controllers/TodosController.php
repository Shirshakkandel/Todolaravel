<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpParser\Builder\Function_;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo',Todo::find($todoId));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title'=>'required|min:6|max:12',
            'description'=>'required'
        ]);

        $data =request()->all();
        $todo= new Todo();
        $todo->title=$data['title']; 
        $todo->description=$data['description'];
        $todo->completed =false;
        $todo->save();
        return redirect('/todos');

    }

    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo);


    }
    
    public function update($todoId)
    {
        $this->validate(request(), [
            'title'=>'required|min:6|max:12',
            'description'=>'required'
        ]);

        $data =request()->all();
        $todo= Todo::find($todoId);
        $todo->title=$data['title']; 
        $todo->description=$data['description'];
        $todo->completed =false;
        $todo->save();
        return redirect('/todos');

    }

    public function delete($todoId)
    {
        $todo= Todo::find($todoId);
        $todo->delete();
        return redirect('/todos');
    }
}