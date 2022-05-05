@extends('layouts.app')
@section('content')
    <h1 class="text-center">Bu tashkilotlar ro'yxati</h1>
<br>
<table class="table table-bordered">
    <thead >
        <tr>
             <td>T/R</td>
             <td>Tashkilot nomi</td>
             <td>Tashkilot manzili</td>
             <td>Tashkilot telefon raqami</td>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+($loop->index+1)}}</td>
                <td>{{$company-> name}}</td>
                <td>{{$company-> address}}</td>
                <td>{{$company-> phone}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
{{$companies->links()}}
@endsection
