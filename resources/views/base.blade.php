<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">Coaching Management</a>

            <ul class="navbar-nav">
                <div class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-white">Home</a></div>
                @auth
                <div class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-capitalize">{{auth()->user()->name}}</a></div>
                @endauth
                @guest
                <div class="nav-item"><a href="{{route('login')}}" class="nav-link text-white">Login</a></div>
                <div class="nav-item"><a href="{{route('signup')}}" class="nav-link text-white">Signup</a></div>
                @endguest
                @auth
                <div class="nav-item"><a href="{{route('logout')}}" class="nav-link text-white">Logout</a></div>
                @endauth

                <div class="nav-item"><a href="{{route('student.create')}}" class="btn btn-dark ">Apply for join Us</a></div>
            </ul>
        </div>
    </nav>

    @section('data')
      @show()
</body>
</html>