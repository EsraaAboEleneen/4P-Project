@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;background-color: aliceblue; color: cadetblue ;">
            <a href="{{route('benefits.index')}}"><span class="fa fa-arrow-left mx-5
              cursor-pointer" style="font-size: 20px; padding: 10px;"></span></a><h1 style="padding: 5px;text-align: center">
                <img src="{{asset('/storage/images/benefits/'.$benefit->attachment)}}" alt="image" width="200px" style="padding: 10px;">
                {{$benefit->title}}
            </h1>
        </div>
    </div>
@endsection

