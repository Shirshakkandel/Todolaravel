@extends('layouts.app');
@section('title')
    Single Todo: {{$todo->title}}
@endsection

@section('content')
<h1 class="text-center my-2">{{$todo->title}}</h1>
<div class="container">
   <div class="row justify-content-center">
      
         <div class="col-6">
           <div class="card">
              <div class="card-header">Detail</div>
              <div class="card-body">
                 {{$todo->description}}
              </div>
            </div>
              <a href="/todos/{{$todo->id}}/edit" class="btn btn-info  my-2 ">Edit</a>
              <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger  my-2 ">Delete</a>
        
         </div>
      
   </div>

</div>
@endsection