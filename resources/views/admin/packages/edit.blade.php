@extends('layouts.app')

@section('content')
    <form method="POST" style="padding: 10px" action="{{route('package.update',$package->id)}}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$package->name}}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input type="text" name="details" class="form-control"  value="{{$package->details}}"  id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ServiceID</label>
            <select name="service_id" class="form-control" id="exampleInputPassword1">
                @foreach($serviceId as $id)
                    <option>
                        {{$id->id}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control"  value="{{$package->price}}"  id="exampleInputPassword1">
        </div>
        <div style="padding: 10px">
            <input class="btn btn-primary" type="submit" value="Edit">
        </div>
    </form>
    <x-alert/>
@endsection
