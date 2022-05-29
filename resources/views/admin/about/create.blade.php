@extends('layouts.app')


@section('content')
    <form method="POST" style="padding: 10px" enctype="multipart/form-data" action="{{route('about.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" name="content" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
    </form>
    <x-alert/>

@endsection
