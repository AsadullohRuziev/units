
@extends('app') {{--//members page import to app file--}}

@section('title', 'AsadullohRuziev')

@section('content')
    @foreach($members as $member)
        <h1>{{$member}}</h1>
    @endforeach
@endsection

