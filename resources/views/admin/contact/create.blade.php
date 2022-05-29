@extends('layouts.app')

@section('content')
    <form method="POST" style="padding: 10px" enctype="multipart/form-data" action="{{route('contact.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mobile Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Subject Here</label>
            <input type="text" name="body" class="form-control">
        </div>

        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
    </form>
@endsection
