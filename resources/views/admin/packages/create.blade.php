@extends('layouts.app')

@section('content')
    <form method="POST" style="padding: 10px" enctype="multipart/form-data" action="{{route('package.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Package Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Details of Package</label>
            <input type="text" name="details" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Package Related To</label>
            <select name="service_id" class="form-control" id="exampleInputPassword1">
                @foreach($serviceId as $id)
                <option>
                    {{$id->id}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Package Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
    </form>
    <x-alert/>

@endsection
