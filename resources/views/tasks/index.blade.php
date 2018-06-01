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
                <th scope="col" colspan="4"> عملیات </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $key => $task)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td> {{$task->name ?? '-'}} </td>
                    <td> {{$task->date ?? '-'}} </td>
                    <td>
                        @if ($task->done)
                            <span class="text-success"> <i class="fa fa-check half-x"></i> </span>
                        @else
                            <span class="text-danger"> <i class="fa fa-times half-x"></i> </span>
                        @endif
                    </td>
                    <td>
                        {{$task->created_at ?? '-'}}
                    </td>
                    <td>
                        <a href="{{url("tasks/$task->id")}}" title="مشاهده"> <i class="fa fa-eye half-x"></i> </a>
                    </td>
                    <td>
                        <a href="{{url("tasks/$task->id/edit")}}" class="text-success" title="ویرایش"> <i class="fa fa-edit half-x"></i> </a>
                    </td>
                    <td>
                        <form class="" action="{{url("tasks/$task->id")}}" method="post">

                            @csrf
                            {{method_field('DELETE')}}

                            <button type="submit" class="btn btn-link p-0">
                                <i class="fa fa-trash text-danger pointer half-x"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        @if ($task->done)
                            <a class="text-warning pointer" title="مارک کردن به عنوان انجام نشده"> <i class="fa fa-times-circle half-x"></i> </a>
                        @else
                            <a class="text-warning pointer" title="مشاهده"> <i class="fa fa-check-circle half-x"></i> </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$tasks->links()}}

@endsection
