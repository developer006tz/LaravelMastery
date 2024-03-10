@extends('layout.master')
@section('heading', 'Create Subject')
@section('base_link_text', 'Home')
@section('page_link_text', 'Create Subject')
@section('title','Add Subject')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">

                    <form action="{{route('student.store')}}" method="POST" class="form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-8 mx-auto">
                                <div class="col-12">
                                    <div class="form-group local-forms my-3">
                                        <label for="name" class="label">Subject name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group local-forms my-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
