@extends('layouts.master')
@section('content')

    <div class="card m-3 p-3">
        <div class="card-body text-center">
            <a href="{{url("tasks/create")}}" class="btn btn-info px-3 mx-1">
                <i class="fa fa-plus ml-1"></i> ایجاد تسک جدید
            </a>
            <a href="{{url("tasks")}}" class="btn btn-success px-3 mx-1">
                <i class="fa fa-eye ml-1"></i> مشاهده همه تسک ها
            </a>
        </div>
    </div>

@endsection
