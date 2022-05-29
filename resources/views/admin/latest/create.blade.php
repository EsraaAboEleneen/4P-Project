@extends('layouts.app')


@section('content')
    <form method="POST" style="padding: 10px" enctype="multipart/form-data" action="{{route('latest.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Upload Attachment</label>
            <input type="file" name="attach" class="form-control">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
    </form>
    <x-alert/>

@endsection
