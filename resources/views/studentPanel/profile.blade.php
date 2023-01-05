@extends('base')

@section('title')
    Student Dashboard
@endsection



@section('data')
    <div class="container mt-2">
        @if($checkStudent)
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="http://picsum.photos/150/150?random=3" alt="" class="rounded-circle">
                        <div class="card-body">
                            <h5>{{auth()->user()->name}}</h5>
                            <p class="small text-muted"><i class="bi bi-phone"></i> +91{{auth()->user()->contact}}</p>
                        </div>
                </div>
                <div class="col-12 text-center py-2">
                <a href="" class="btn btn-warning text-center w-100">Edit Profile</a>
            </div>
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">Payments</a>
                <a href="" class="list-group-item list-group-item-action">Courses</a>
                <a href="" class="list-group-item list-group-item-action">Examination</a>
                <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-danger text-white">Logout</a>
            </div>
        </div>
            <div class="col-9">
                <div class="card card-body bg-light">
                    <div class="container">
                        <h1 class="display-3">welcome, {{auth()->user()->name}}</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates iure odio veniam beatae labore officiis doloremque error inventore suscipit,
                             ducimus deserunt exercitationem, animi tempora aliquam praesentium, eveniet laboriosam id at.</p>
                             <a href="" class="btn btn-success">Check Course</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-warning">
            <h2 class="alert-title">Notice</h2>
            <p class="lead">please Apply for admission first</p>
            <a href="{{route('student.create')}}" class="btn btn-success">Apply For Join Us</a>
        </div>
        @endif
    </div>
@endsection