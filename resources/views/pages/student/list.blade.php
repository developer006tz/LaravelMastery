@extends('layout.master')
@section('heading', $page_title)
@section('base_link_text', 'Home')
@section('page_link_text', $page_title)
@section('title','Add Student')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>sn</th>
                            <th>name</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>student number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->number}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
