@extends('layouts.app')

@section('title-block','Groups')

@section('content')
    <h1 class="title"> Groups </h1>
    <div class="alert alert-info">
        @foreach($data as $group)
            <div>
                <a href="{{ route('one-group', $group->id ) }}"><button class="btn btn-warning group-btn">{{ $group->name  }} </button></a>
            </div>
            @foreach($group->students as $student)
                <div class="student">
                    <a href="{{ route('one-student', $student->id ) }}"><button class="btn btn-success">{{ $student->name }}</button></a>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection
