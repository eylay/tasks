@extends('layouts.master')
@section('content')
    <div class="card text-white bg-info mb-3">
        <div class="card-header"> {{$task->name}} </div>
        <div class="card-body">
            <h5 class="card-title">{{$task->name}}</h5>
            <p class="card-text">
                تاریخ انجام : {{$task->date ?? '-'}}
                <br>
                تاریخ اضافه شدن : {{$task->created_at ?? '-'}}
                <br>
                وضعبیت : {{$task->done ? 'انجام شده' : 'انجام نشده'}}
            </p>
        </div>
        <div class="card-footer text-left">
            <a href="{{url("tasks")}}" class="btn btn-light"> <i class="fa fa-arrow-right ml-1"></i> بازگشت </a>
        </div>
    </div>
@endsection
