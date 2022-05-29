@extends('layouts.app')

@section('content')
    <form method="POST" style="padding: 10px" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$service->title}}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" name="content" class="form-control"  value="{{$service->content}}"  id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Attachment</label>
            <input type="file" name="attach" class="form-control"  value="{{$service->attach}}"  id="exampleInputPassword1">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Edit">
        </div>
    </form>
    <x-alert/>
@endsection
