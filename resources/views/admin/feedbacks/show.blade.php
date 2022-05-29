@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;background-color: aliceblue; color: cadetblue ;">
            <a href="{{route('feedbacks.index')}}"><span class="fa fa-arrow-left mx-5
              cursor-pointer" style="font-size: 20px; padding: 10px;"></span></a><h1 style="padding: 5px;text-align: center">
                <img src="{{asset('/storage/images/feedbacks/'.$feedback->attachment)}}" alt="image" width="200px" style="padding: 10px;">
                {{$feedback->title}}
            </h1>

        </div>
        <h3 style="padding: 5px;margin-left: 20px">Content:</h3>
        <p style="font-size: 40px;text-align: center">{{$feedback->content}}</p>
    </div>
@endsection
