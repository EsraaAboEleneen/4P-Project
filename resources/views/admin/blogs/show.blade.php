@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;">
            <h1 style="background-color: aliceblue; color: cadetblue ;padding: 10px;text-align: center">
                <img src="{{asset('/storage/images/blogs/'.$blog->image)}}" alt="image" width="200px" style="padding: 10px;border-radius: 50%">
                {{$blog->name}}
            </h1>
            <a href="{{route('blogs.index')}}"><span class="fa fa-arrow-left mx-5
         cursor-pointer" style="font-size: 20px;padding: 5px;margin-left: 20px"></span></a>
        </div>
        <div style="padding: 5px">
            <h3 style="margin-left: 30px">Content of Blog:</h3>
            <p style="margin-left: 50px;text-align: center;font-size: 30px">{{$blog->content}}</p>
        </div>

    </div>
@endsection
