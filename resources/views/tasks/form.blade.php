@extends('layouts.master')
@section('content')

    @include('fragments.errors')

    <form class="row" action="{{url("tasks/$task->id")}}" method="post">

        @csrf
        @if($task->id)
            {{method_field("PUT")}}
        @endif

        <div class="col-md-3"></div>

        <div class="col-md-3">
            <label for="name"> نام تسک </label>
            <input type="text" class="form-control" name="name" value="{{$task->name ?? old('name')}}">
        </div>

        <div class="col-md-3">
            <label for="date"> تاریخ </label>
            <input type="date" class="form-control" name="date" value="{{$task->date ?? old('date')}}">
        </div>
        <div class="col-md-3"></div>

        <div class="col-md-5"></div>

        <div class="col-md-2 mt-3">
            <button type="submit" class="btn btn-primary btn-block"> تایید </button>
        </div>

    </form>

@endsection
