@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;">
            <h1 style="background-color: aliceblue; color: cadetblue ;padding: 10px;text-align: center">
                <img src="{{asset('/storage/images/service/'.$service->attach)}}" alt="image" width="200px" style="padding: 10px;border-radius: 50%">
                {{$service->title}}
            </h1>
            <p style="font-size: 40px;text-align: center">{{$service->content}}</p>
            <a href="{{route('service.index')}}"><span class="fa fa-arrow-left mx-5
         cursor-pointer" style="font-size: 20px;padding: 5px;margin-left: 20px"></span></a>
        </div>

    </div>
@endsection
