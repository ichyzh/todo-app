@extends('layouts.app')

@section('title')
    Edit todo
@endsection

@section('content')
    <div class="container">
    <h1 class="text-center my-5">Edit todo page</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Edit
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/todos/{{$todo->id}}/update" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$todo->name}}">
                            </div>
                            <div class="form-group">
                                <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">{{$todo->description}}</textarea>
                            </div>
                            <div class="form-group test-center">
                                <button type="submit" class="btn btn-success">Edit Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection