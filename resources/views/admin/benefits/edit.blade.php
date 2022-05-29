@extends('layouts.app')


@section('content')
    <form method="POST" style="padding: 10px" action="{{route('benefits.update',$benefit->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$benefit->title}}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Attachment</label>
            <input type="file" name="attachment" class="form-control"  value="{{$benefit->attachment}}"  id="exampleInputPassword1">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Edit">
        </div>
    </form>
    <x-alert/>
@endsection
