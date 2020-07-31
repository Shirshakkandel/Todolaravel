<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"  crossorigin="anonymous">
   <title>
      @yield('title')
   </title>
</head>
<body>
   <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="/">Todos App</a>
     
      <div class="d-flex">
        <ul class="navbar-nav d-flex">
          <li class="nav-item active">
            <a class="nav-link" href="/todos"> Todos</a>
          </li>

          <li class="nav-item d-flex">
            <a class="nav-link" href="/new-todo">Create</a>
          </li>

        
        </ul>
        
      </div>
    </nav>

@yield('content')
      
</body>
</html>