@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot malumotlarini o'zgartirish</h1>

<div class="row">
    <div class="col-md-6">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{route('companies.update', ['company'=> $company->id])}}"> {{--        //qayerga yuborayotganimizni ko'rsatadi--}}
            @method('PUT')
             @csrf         {{--        //sahifadan chiqib ketayotganligini bildiradi--}}
            <div class="mb-3">
                <label for="name" class="form-label">Tashkilot nomi</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}"> {{--   //{value} validatsiya qilganda malumot uchib ketmaydi--}}
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Tashkilot manzili</label>
                <input type="text" class="form-control" id="address"  name="address" value="{{$company->address}}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Tashkilot telefon raqami</label>
                <input type="text" class="form-control" id="phone"  name="phone" value="{{$company->phone}}">
            </div>

            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
</div>






@endsection
