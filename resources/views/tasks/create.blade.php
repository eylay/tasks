@extends('layouts.master')
@section('content')

    @include('fragments.errors')

    <form class="row" action="{{url("tasks")}}" method="post">

        @csrf

        <div class="col-md-3"></div>

        <div class="col-md-3">
            <label for="name"> نام تسک </label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>

        <div class="col-md-3">
            <label for="date"> تاریخ </label>
            <input type="date" class="form-control" name="date" value="{{old('date')}}">
        </div>
        <div class="col-md-3"></div>

        <div class="col-md-5"></div>

        <div class="col-md-2 mt-3">
            <button type="submit" class="btn btn-primary btn-block"> تایید </button>
        </div>

    </form>

@endsection
