@extends('layouts.master')
@section('content')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"> نام تسک </th>
                <th scope="col"> تاریخ انجام</th>
                <th scope="col"> انجام شده </th>
                <th scope="col"> تارخ اضافه شدن </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $key => $task)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td> {{$task->name ?? '-'}} </td>
                    <td> {{$task->date ?? '-'}} </td>
                    <td class="done">
                        @if ($task->done)
                            <span class="text-success"> &check; </span>
                        @else
                            <span class="text-danger"> &times; </span>
                        @endif
                    </td>
                    <td>
                        {{$task->created_at ?? '-'}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
