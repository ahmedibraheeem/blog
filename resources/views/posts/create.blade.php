@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

    <h1>Create a post</h1>
        <hr>
    <form method="POST" action="/pro/public/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>

        </div>


        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>

        <div class="form-group">
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all()as $error)
                    <li>{{$error}}</li>
                    @endforeach
 
            </ul>

        </div>

        </div>
@endsection