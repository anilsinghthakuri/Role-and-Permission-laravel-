@extends('layouts.master')

@section('title','Dashboard')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">Teacher</h4>
                        <p class="card-text">{{$role_data_count[0]}}</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">Student</h4>
                        <p class="card-text">{{$role_data_count[1]}}</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">Accountant</h4>
                        <p class="card-text">{{$role_data_count[2]}}</p>
                      </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
