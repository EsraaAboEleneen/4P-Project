@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;">
            <h1 style="background-color: aliceblue; color: cadetblue ;padding: 10px;text-align: center">
                {{$package->name}}
            </h1>
            <p>{{$package->details}}</p>
            <p>{{$package->price}}</p>
            <p>{{$package->service_id}}</p>
            <a href="{{route('package.index')}}"><span class="fa fa-arrow-left mx-5
         cursor-pointer" style="font-size: 20px;padding: 5px;margin-left: 20px"></span></a>
        </div>

    </div>
@endsection
