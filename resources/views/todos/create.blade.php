@extends('layouts.app');

@section('content')
    


<h1 class="text-center">Create Todo</h1>

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-7">
         
         <div class="card">
            <div class="card-header">Create Todo</div>
            <div class="card-body">
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul class="list-group">
                 
                  @foreach ($errors->all() as $error)
                     <li class="list-group-item">{{$error}}</li>
                  @endforeach
                </ul>
               </div>
                   
               @endif
               <form action="/store-todo" method="POST">
                  @csrf
                  <div class="form-group">
                  <input type="text"  class="form-control" placeholder="Title" name="title">
                  </div>

                  <div class="form-group">
                  <textarea name="description" name="Description" class="form-control" cols="5" rows="5"></textarea>
                  </div>
                  
                  <div class="form-group text-center">
                  <button class="btn btn-primary">Submit</button>
               </div>
            
               </form>
            </div>
         </div>
      </div>

   </div>
</div>

@endsection