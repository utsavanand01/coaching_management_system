@extends('base')

@section('data')
<div class="container mt-3">
    <div class="row">
        <div class="col-3">
            @include("admin.side")
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h2 class="display-2">{{$total_students}}</h2>
                        <h6 class="text-white">Total students</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body bg-danger text-white">
                        <h2 class="display-2">{{$total_user }}</h2>
                        <h6 class="text-white">Total User</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body bg-success text-white">
                        <h2 class="display-2">30+</h2>
                        <h6 class="text-white">Total payment</h6>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection