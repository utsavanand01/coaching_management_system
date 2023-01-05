@extends('base')

@section('data')

<div class="container mt-5">
    <div class="col-4 mx-auto">
        <div class="card">
            <div class="card-header">Signup Here</div>
            <div class="card-body">
                <form action="{{route('signup')}}"method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')

                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')

                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email/Username</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
    
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                    <div class="mb-3">
                    <label for="">password</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')

                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="send" value="Create an account" class="btn btn-success w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection