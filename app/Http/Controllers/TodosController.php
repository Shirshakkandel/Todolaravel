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

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo',$todo);
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
        session()->flash('success','Todo Store succesfully');
        return redirect('/todos');

    }

    public function edit(Todo $todo)
    {
       
        return view('todos.edit')->with('todo',$todo);
        session()->flash('success', 'Todo edit successfully');


    }
    
    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'title'=>'required|min:6|max:12',
            'description'=>'required'
        ]);

        $data =request()->all();
       
        $todo->title=$data['title']; 
        $todo->description=$data['description'];
        $todo->completed =false;
        $todo->save();
        session()->flash('success', 'Todo update successfully');
        return redirect('/todos');

    }

    public function delete(Todo $todo)
    {
       
        $todo->delete();
        session()->flash('success', 'Todo delete successfully');
        return redirect('/todos');
        
    }

    public function completed(Todo $todo)
    {
        $todo->completed=true;
        $todo->save();
        session()->flash('success',"Todo completed succesfully");

        return redirect('/todos');
    }
}
