@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot qo'shish sahifasi</h1>

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

        <form method="post" action="{{route('companies.store')}}"> {{--        //qayerga yuborayotganimizni ko'rsatadi--}}
    @csrf         {{--        //sahifadan chiqib ketayotganligini bildiradi--}}
            <div class="mb-3">
                <label for="name" class="form-label">Tashkilot nomi</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"> {{--   //{value} validatsiya qilganda malumot uchib ketmaydi--}}
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Tashkilot manzili</label>
                <input type="text" class="form-control" id="address"  name="address" value="{{old('address')}}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Tashkilot telefon raqami</label>
                <input type="text" class="form-control" id="phone"  name="phone" value="{{old('phone')}}">
            </div>

            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
</div>






@endsection
