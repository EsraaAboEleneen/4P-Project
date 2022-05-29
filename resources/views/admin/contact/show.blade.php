@extends('layouts.app')

@section('content')
    <div>
        <div style="padding: 10px;background-color: aliceblue; color: cadetblue ;">
            <a href="{{route('contact.index')}}"><span class="fa fa-arrow-left mx-5
              cursor-pointer" style="font-size: 20px; padding: 10px;"></span></a><h1 style="padding: 5px;text-align: center">
                {{$contact->username}}
            </h1>

        </div>
        <h3 style="padding: 5px;margin-left: 20px">Email:{{$contact->email}}</h3>
        <h3 style="padding: 5px;margin-left: 20px">Phone Number:{{$contact->phone}}</h3>
        <h3 style="padding: 5px;margin-left: 20px">Address:{{$contact->address}}</h3>
        <h3 style="padding: 5px;margin-left: 20px">Content of mail:</h3>
        <p style="font-size: 40px;text-align: center">{{$contact->body}}</p>
    </div>
@endsection
