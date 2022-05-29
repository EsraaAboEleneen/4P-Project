@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;">
            <h1 style="background-color: aliceblue; color: cadetblue ;padding: 10px;text-align: center">
                <img src="{{asset('/storage/images/latest/'.$latest->attach)}}" alt="image" width="200px" style="padding: 10px;border-radius: 50%">
                {{$latest->title}}
            </h1>
            <a href="{{route('latest.index')}}"><span class="fa fa-arrow-left mx-5
         cursor-pointer" style="font-size: 20px;padding: 5px;margin-left: 20px"></span></a>
        </div>

    </div>
@endsection
