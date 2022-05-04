
@extends('app') {{--//members page import to app file--}}

@section('title', 'AsadullohRuziev')

@section('content')
    @foreach($members as $member)
        <h1>{{$member}}</h1>
    @endforeach


    @forelse($people as $person)
        <h1>{{$person}}</h1>
      @empty  {{--   //massive bo'sh bo'lsa emptyni ischidagi qiymat qaytadi--}}
        hech qanday inson yuq
    @endforelse
@endsection

