@extends("base")

@section('title')
Apply for admission
@endsection

@section('data')

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto"></div>
        <div class="col-6 mx-auto">
            <div class="card mt-5">
                <div class="card-header">Apply for admission</div>
                <div class="card-body">
                    <form action="{{route('student.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for=""> Your Name</label>
                            <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" disabled>
                            @error('name')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Father's Name</label>
                            <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control">
                            @error('fatherName')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Mother's Name</label>
                            <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control">
                            @error('motherName')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Date of birth</label>
                            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                            @error('dob')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">education</label>
                            <input type="text" name="education" value="{{old('education')}}" class="form-control">
                            @error('education')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control">
                            @error('address')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">gender</label>
                            <select name="gender" class="form-select">
                                <option value="m">Male</option>
                                <option value="f">female</option>
                                <option value="o">other</option>
                            </select>
                            @error('gender')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Apply for CWS" class="btn btn-success w-100">
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection