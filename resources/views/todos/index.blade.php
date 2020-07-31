 @extends('layouts.app');

 @section('title')
     Todos
 @endsection

   @section('content')

   <h1 class="text-center justify-content-between">Todos</h1>
 <div class="container">
<div class="row justify-content-center">
   <div class="col-8">
   <div class="card card-default">
      <div class="card-header">Todos</div>
        <div class="card-body">
         <ul class="list-group">
            @foreach ($todos as $task)
                   <li class="list-group-item">
                   {{$task->title}}
                     <a href="/todos/{{$task->id}}" class="btn btn-primary float-right ">View</a>
                    
                   </li> 
                  
             @endforeach
          </ul>
         </div>
      </div>
   </div>
  </div>
</div>
   
       
   @endsection

 
